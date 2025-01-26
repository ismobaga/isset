<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CampaignController;
use App\Livewire\CreateCandidaturePage;
use App\Livewire\HomePage;
use App\Livewire\ProgramIndexPage;
use App\Livewire\ProgramCreatePage;
use App\Livewire\ProgramEditPage;
use App\Livewire\AcademicYearIndexPage;
use App\Livewire\AcademicYearCreatePage;
use App\Livewire\AcademicYearEditPage;
use App\Livewire\CandidatureIndexPage; // Add this line
use App\Livewire\CandidatureDecisionPage; // Add this line
use App\Livewire\ProgramListPage;
use App\Livewire\AboutPage;
use App\Livewire\ContactPage;
use App\Livewire\ContactMessagesPage;
use App\Livewire\ProgramViewPage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', 'home');

Route::get('/home', HomePage::class);
Route::get('/candidature', CreateCandidaturePage::class);
Route::get('/formations', ProgramListPage::class);
Route::get('about', AboutPage::class);
Route::get('/contact', ContactPage::class);


Route::prefix('edu')->middleware(['laravel-moodle'])->group(function () {
// Route::middleware(['auth:sanctum', 'verified'])->group(function () {

Route::redirect('/', 'login');


    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/analytics', [DashboardController::class, 'analytics'])->name('analytics');
    Route::get('/dashboard/fintech', [DashboardController::class, 'fintech'])->name('fintech');
    Route::get('/dashboard/enrolled-courses', [DashboardController::class, 'enrolledCourses'])->name('dashboard.enrolled-courses');
    Route::get('/ecommerce/customers', [CustomerController::class, 'index'])->name('customers');
    Route::get('/ecommerce/orders', [OrderController::class, 'index'])->name('orders');

    // Program routes using Livewire

    Route::get('/programs', ProgramIndexPage::class)->name('programs.index');
    Route::get('/programs/create', ProgramCreatePage::class)->name('programs.create');
    Route::get('/programs/{program}/edit', ProgramEditPage::class)->name('programs.edit');
    Route::get('/programs/{id}', ProgramViewPage::class)->name('programs.show');

    // Academic Year routes using Livewire
    Route::get('/academic-years', AcademicYearIndexPage::class)->name('academic-years.index');
    Route::get('/academic-years/create', AcademicYearCreatePage::class)->name('academic-years.create');
    Route::get('/academic-years/{academicYear}/edit', AcademicYearEditPage::class)->name('academic-years.edit');

    // Candidature routes using Livewire
    Route::get('/candidatures', CandidatureIndexPage::class)->name('candidatures.index');
    Route::get('/candidatures/{candidature}/decision', CandidatureDecisionPage::class)->name('candidatures.decision');

    Route::get('/contact-messages', ContactMessagesPage::class)->name('contact-messages.index');

    Route::fallback(function() {
        return view('pages/utility/404');
    });
});
