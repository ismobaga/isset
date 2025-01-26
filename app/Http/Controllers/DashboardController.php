<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataFeed;
use App\Providers\CustomMoodleUserProvider;

class DashboardController extends Controller
{
    protected $moodleProvider;

    public function __construct(CustomMoodleUserProvider $moodleProvider)
    {
        $this->moodleProvider = $moodleProvider;
    }

    public function index()
    {
        $dataFeed = new DataFeed();

        return view('pages/dashboard/dashboard', compact('dataFeed'));
    }

    /**
     * Displays the analytics screen
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function analytics()
    {
        return view('pages/dashboard/analytics');
    }

    /**
     * Displays the fintech screen
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function fintech()
    {
        return view('pages/dashboard/fintech');
    }

    public function enrolledCourses()
    {
        $token = session('moodle-token');
        $courses = $this->moodleProvider->getEnrolledCourses($token);

        return view('pages.dashboard.enrolled-courses', compact('courses'));
    }
}
