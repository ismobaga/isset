<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class CustomMoodleUserProvider implements UserProvider
{
    private PendingRequest $http;

    private string $adminToken;

    private string $userModel;

    public function __construct()
    {
        $this->http = Http::withOptions([
            'base_uri' => config('laravel-moodle.base_url'),
        ]);

        $this->adminToken = config('laravel-moodle.admin_token');
        $this->userModel = config('laravel-moodle.user_model');
    }

    public function retrieveById(mixed $identifier): Model
    {
        return $this->userModel::findOrFail($identifier);
    }

    public function retrieveByToken($identifier, $token)
    {
        //
    }

    public function updateRememberToken(Authenticatable $user, $token)
    {
        //
    }

    public function retrieveByCredentials(array $credentials): Model
    {
        return $this->userModel::firstOrNew([
            'username' => $credentials[config('laravel-moodle.login_attribute')],
        ]);
    }

    public function validateCredentials(Authenticatable $user, array $credentials): bool
    {
        $attempt = $this->http
            ->asForm()
            ->post('/login/token.php?service=web_service', [
                'username' => $user->username,
                'password' => $credentials['password'],
            ])
            ->json();
        if (!isset($attempt['error']) && isset($attempt['token'])) {
            session(['moodle-token' => $attempt['token']]);
            $this->syncUser($user);

            return true;
        }

        return false;
    }

    public function syncUser(Model $user, string $userKey = 'username', string $moodleKey = null): void
    {
        $data = $this->http
            ->asForm()
            ->post(
                "/webservice/rest/server.php?wstoken={$this->adminToken}&wsfunction=core_user_get_users&moodlewsrestformat=json",
                [
                    'criteria' => [
                        [
                            'key' => $moodleKey ?? config('laravel-moodle.login_attribute'),
                            'value' => $user->$userKey,
                        ],
                    ],
                ]
            )
            ->json()['users'][0];

        collect(config('laravel-moodle.sync_attributes'))
            ->each(function ($item, $key) use ($data, $user) {
                $user->$key = $data[$item] ?? null;
            });

        // // Retrieve and set the user's role
        // $roles = $this->http
        //     ->asForm()
        //     ->post(
        //         "/webservice/rest/server.php?wstoken={$this->adminToken}&wsfunction=core_role_get_user_roles&moodlewsrestformat=json",
        //         [
        //             'userid' => $data['id'],
        //         ]
        //     )
        //     ->json();

        // if (!empty($roles)) {
        //     $user->role = $roles[0]['shortname'] ?? null;
        // }

        $user->save();

        // TODO: Add cohort to user on creation in Moodle
        // TODO: Auto-enroll user in cohort courses
    }

    public function getEnrolledCourses(string $token): array
    {
        $response = $this->http
            ->asForm()
            ->post(
                "/webservice/rest/server.php?wstoken={$token}&wsfunction=core_enrol_get_users_courses&moodlewsrestformat=json",
                [
                    'userid' => auth()->user()->moodle_id,
                ]
            )
            ->json();

        // Add course image to each course
        // foreach ($response as &$course) {
        //     $course['courseimage'] = $this->getCourseImage($course['id'], $token);
        // }

        return $response;
    }

    private function getCourseImage(int $courseId, string $token): string
    {
        $response = $this->http
            ->asForm()
            ->post(
                "/webservice/rest/server.php?wstoken={$token}&wsfunction=core_course_get_courses_by_field&moodlewsrestformat=json",
                [
                    'field' => 'id',
                    'value' => $courseId,
                ]
            )
            ->json();

        return $response['courses'][0]['overviewfiles'][0]['fileurl'] ?? 'default-image-url';
    }
}
