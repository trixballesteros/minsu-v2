<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Page\HomeController;
use App\Http\Controllers\Page\UserController;
use App\Http\Controllers\Page\CollegeController;
use App\Http\Controllers\Page\ProgramController;
use App\Http\Controllers\Page\UniversityEventController;
use App\Http\Controllers\Page\NewsController;
use App\Http\Controllers\Page\TransparencyController;
use App\Http\Controllers\Page\DownloadablesController;
use App\Http\Controllers\Page\PhilgepsController;
use App\Http\Controllers\Page\AboutController;
use App\Http\Controllers\Page\AdmissionController;
use App\Http\Controllers\Page\WelcomeController;
use App\Http\Controllers\Page\CitizenCharterController;
use App\Http\Controllers\Page\FreedomOfInformationController;
use App\Http\Controllers\Page\OPController;
use App\Http\Controllers\Page\VPAAController;
use App\Http\Controllers\Page\VPAFController;
use App\Http\Controllers\Page\VPREDController;
use App\Http\Controllers\Page\StudentAffairsController;
use App\Http\Controllers\Page\RegistrarOfficeController;
use App\Http\Controllers\Page\NSTPController;
use App\Http\Controllers\Page\GuidanceCounselorController;
use App\Http\Controllers\Page\StudentController;
use App\Http\Controllers\Page\AlumniController;
use App\Http\Controllers\Page\ResearchController;
use App\Http\Controllers\Page\MailListController;
use App\Http\Controllers\Page\JobvacantController;
use App\Http\Controllers\Page\CMCController;
use App\Http\Controllers\Page\CAAFController;
use App\Http\Controllers\Page\KeyOfficialsController;
use App\Http\Controllers\Page\DataPrivacyNoticeController;


use App\Http\Controllers\Page\Admin\PhilgepsController as AdminPhilgepsController;
use App\Http\Controllers\Page\Admin\TransparencyController as AdminTransparencyController;
use App\Http\Controllers\Page\Admin\DownloadablesController as AdminDownloadablesController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class,'index'])->name('welcome');
//Route::get('/programs', [CAAFController::class,'index'])->name('caaf');


Route::get('/news/list', [NewsController::class,'frontend_index'])->name('news-list');
Route::get('/news/details/{id}', [NewsController::class,'show'])->name('news-details');
Route::get('/events/list', [UniversityEventController::class,'frontend_index'])->name('events-list');
Route::get('/announcement/list', [\App\Http\Controllers\Page\AnnouncementController::class,'frontend_index'])->name('announcement-list');
Route::get('/events/details/{id}', [UniversityEventController::class,'show'])->name('events-details');

Route::name('about.')->prefix('about')->group(function (){
    Route::get('/history', [AboutController::class,'history'])->name('history');
    Route::get('/vmgo', [AboutController::class,'vmgo'])->name('vmgo');
    Route::get('/hymn', [AboutController::class,'hymn'])->name('hymn');
    Route::get('/core-values', [AboutController::class,'core_values'])->name('core-values');
    Route::get('/quality-policy', [AboutController::class,'quality_policy'])->name('quality-policy');
    Route::get('/', [AboutController::class,'index'])->name('index');
});
Route::name('academics.')->prefix('academics')->group(function (){
    Route::get('/admission', [AdmissionController::class,'admission'])->name('admission');
    Route::get('/programs', [ProgramController::class,'index'])->name('programs');
//    Route::get('/programs', [CAAFController::class,'index'])->name('caaf');
    Route::get('/students', [StudentController::class,'index'])->name('students');
    Route::get('/alumni', [AlumniController::class,'index'])->name('alumni');
    Route::name('offices.')->prefix('offices')->group(function (){
        Route::get('/office-of-the-guidance-counselor', [GuidanceCounselorController::class,'index'])->name('guidance');
        Route::get('/office-of-national-service-training-program', [NSTPController::class,'index'])->name('nstp');
        Route::get('/office-of-student-affairs-and-service', [StudentAffairsController::class,'index'])->name('student-affairs');
        Route::get('/office-of-the-registrar', [RegistrarOfficeController::class,'index'])->name('registrar');
    });
});

Route::name('research.')->prefix('research')->group(function (){
    Route::get('/research-extension-and-development', [ResearchController::class,'index'])->name('research');
});

Route::name('good-governance.')->prefix('good-governance')->group(function (){
    Route::get('/philgeps', [PhilgepsController::class,'index'])->name('philgeps');
    Route::get('/transparency', [TransparencyController::class,'index'])->name('transparency');
    Route::get('/citizens-charter', [CitizenCharterController::class,'index'])->name('citizens-charter');
    Route::get('/freedom-of-information', [FreedomOfInformationController::class,'index'])->name('freedom-of-information');
    Route::get('/data-privacy-notice', [DataPrivacyNoticeController::class,'index'])->name('data-privacy-notice');
});
Route::name('administration.')->prefix('administration')->group(function (){
    Route::get('/key-officials', [KeyOfficialsController::class,'index'])->name('key-officials');
    Route::name('offices.')->prefix('offices')->group(function (){
        Route::get('/office-of-the-president', [OPController::class,'index'])->name('office-of-the-president');
        Route::get('/office-of-the-vice-president-for-academic-affairs', [VPAAController::class,'index'])->name('office-of-the-vice-president-for-academic-affairs');
        Route::get('/office-of-the-vice-president-for-admin-and-finance', [VPAFController::class,'index'])->name('office-of-the-vice-president-for-admin-and-finance');
        Route::get('/office-of-the-vice-president-for-research-extension-and-development', [VPREDController::class,'index'])->name('office-of-the-vice-president-for-research-extension-and-development');
    });
});

Route::name('services.')->prefix('services')->group(function (){
    Route::get('/mail-list', [MailListController::class,'index'])->name('mail-list');
    Route::get('/jobvacants', [JobvacantController::class,'index'])->name('jobvacants');
    Route::get('/cmc-functions', [CMCController::class,'index'])->name('cmc-functions');
    Route::get('/downloadables', [DownloadablesController::class,'index'])->name('downloadables');
});
Route::middleware(['auth:sanctum'])->group(function(){
    // PROFILE
    Route::name('profile.')->prefix('profile')->group(function(){
    });
    // ADMIN ROUTES
   Route::middleware(['role:Admin|Coach'])->name('admin.')->prefix('admin')->group(function() {
       Route::get('', [HomeController::class, 'admin_dashboard'])->name('dashboard');

       Route::middleware(['role:Admin'])->group(function () {
           Route::name('users.')->prefix('users')->group(function () {
               Route::resource('accounts', UserController::class)->only('index', 'create', 'show', 'edit');
           });
       });
       Route::resource('college', CollegeController::class)->only('index');
       Route::resource('program', ProgramController::class)->only('index');
       Route::resource('event', UniversityEventController::class)->only('index');
       Route::resource('news', NewsController::class)->only('index');
       Route::resource('transparency', AdminTransparencyController::class)->only('index');
       Route::resource('downloadables', AdminDownloadablesController::class)->only('index');
       Route::resource('philgeps', AdminPhilgepsController::class)->only('index');
   });
});

