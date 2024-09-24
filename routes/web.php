<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\AcademicAndResearchController;
use App\Http\Controllers\Site\BusinessAndInnovationController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\SmartTrainingController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::prefix('site')->as('site.')->group(function () {
    Route::prefix('about')->as('about.')->group(function(){
        Route::get('/', [AboutController::class, 'index'])->name('index');
        Route::get('/team/{theme}', [AboutController::class, 'team'])->name('team');
    });
    Route::get('/services', [HomeController::class, 'services'])->name('core_services');
    Route::get('/apply', [HomeController::class, 'apply'])->name('apply');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::post('contact-submit', [ContactController::class, 'store'])->name('contact.submit');
    // Academic & Research Training
    Route::prefix('academic-and-research')->as('academic_and_research.')->group(function () {
        Route::prefix('branches')->as('branch.')->group(function () {
            Route::get('/{theme}', [AcademicAndResearchController::class, 'branch'])->name('index');
        });
        Route::prefix('univisities')->as('university.')->group(function () {
            Route::get('/{theme}', [AcademicAndResearchController::class, 'univisities'])->name('index');
            Route::get('/university-details/{id}', [AcademicAndResearchController::class, 'subUniversities'])->name('details');
            Route::get('/university-details/category/{id}', [AcademicAndResearchController::class, 'categoryPrograms'])->name('category_programs');
            Route::get('/university-details/program/{id}', [AcademicAndResearchController::class, 'program'])->name('program');
        });
        Route::prefix('british-fam-college')->as('fam_college.')->group(function () {
            Route::get('/exellence-center', [AcademicAndResearchController::class, 'exellenceCenter'])->name('exellence_center');
            Route::get('/academic-programs', [AcademicAndResearchController::class, 'academicPrograms'])->name('academic_programs');
            Route::get('/academic-programs/{category}', [AcademicAndResearchController::class, 'academicDegreesPrograms'])->name('academic_degrees_programs');
        });
    });

    //Business And Innovation Ecosystem
    Route::prefix('business-and-innovation-ecosystem')->as('business_and_innovation_ecosystem.')->group(function () {
        Route::prefix('consulting-services')->as('consulting_services.')->group(function () {
            Route::get('/{theme}', [BusinessAndInnovationController::class, 'consultingServices'])->name('index');
        });
    });
    // Smart Training
    Route::prefix('smart-training')->as('smart_training.')->group(function () {
        Route::get('/apply', [SmartTrainingController::class, 'apply'])->name('apply');
        Route::post('/apply/submit', [SmartTrainingController::class, 'applySubmit'])->name('apply_submit');
        Route::get('/{theme}', [SmartTrainingController::class, 'index'])->name('index');
    });

});
Route::get('/{slug}', [HomeController::class, 'page'])->name('page');


