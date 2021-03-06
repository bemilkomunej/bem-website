<?php

use App\Http\Controllers\Admin\AdditionController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\OffenseController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\StudentDetailController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\CurrentTeamController;
use Laravel\Jetstream\Http\Controllers\Livewire\ApiTokenController;
use Laravel\Jetstream\Http\Controllers\Livewire\TeamController;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Storage;
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

// Route::get('/register',function (){
//     return redirect(route('login'));
// });

Route::get('/dashboard', function () {
    return redirect(route('admin.dashboard'));
});

//Route::get('/', function () {
//    return view('pages.landing.menu.index');
//});

Route::get('/', [SiteController::class, 'home'])->name('home');

Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
Route::get('/blog/{blog:slug}', [SiteController::class, 'article']);
// Route::get('/single-blog', [SiteController::class, 'singleBlog'])->name('single-blog');
Route::get('/ppmb/{student:nim}', [SiteController::class, 'pointDetail'])->name('point-detail');
Route::get('/ppmb', [SiteController::class, 'ppmb'])->name('ppmb');



// Tentang-Kami
Route::get('/kabinet', [SiteController::class, 'kabinet'])->name('kabinet');
Route::get('/profil', [SiteController::class, 'profil'])->name('profil');
Route::get('/kominfo', [SiteController::class, 'kominfo'])->name('kominfo');
Route::get('/adkesma', [SiteController::class, 'adkesma'])->name('adkesma');
Route::get('/luardalam', [SiteController::class, 'luardalam'])->name('luardalam');
Route::get('/psdm', [SiteController::class, 'psdm'])->name('psdm');
Route::get('/perekonomian', [SiteController::class, 'perekonomian'])->name('perekonomian');
Route::get('/rumahtangga', [SiteController::class, 'rumahtangga'])->name('rumahtangga');

Route::get('update-photo',function (){
    return redirect(route('admin.profile.show'));
})->name('profile.show');
//[ 'middleware' => [],'prefix'=>'admin' ]
//Route::name('admin.')->middleware(['auth:sanctum', 'verified'])->prefix('admin/')->group(function() {
Route::name('admin.')->prefix('admin')->middleware(['auth:sanctum','web', 'verified'])->group(function() {
    Route::post('/summernote-upload',[SupportController::class,'upload'])->name('summernote_upload');
    Route::view('/dashboard', "dashboard")->name('dashboard');
    Route::middleware(['checkRole:1,2'])->group(function () {
        Route::resource('blog', BlogController::class);
        Route::resource('member', MemberController::class);
    });
    Route::resource('student', StudentController::class);
    Route::resource('student-detail', StudentDetailController::class);
//    Route::post('student-detail/{id}', [StudentDetailController::class, 'update'])->name('student.update');
//    Route::post('student-detail/{id}', [StudentDetailController::class, 'destroy'])->name('student.destroy');
    Route::resource('offense', OffenseController::class);
    Route::resource('addition', AdditionController::class);
//    Route::middleware(['checkRole:1']){}
    Route::middleware(['checkRole:1'])->group(function () {
        Route::get('/user', [UserController::class, "index"])->name('user');
        Route::view('/user/new', "pages.user.create")->name('user.new');
        Route::view('/user/edit/{userId}', "pages.user.edit")->name('user.edit');
    });


    Route::group(['middleware' => config('jetstream.middleware', ['web'])], function () {
        Route::group(['middleware' => ['auth', 'verified']], function () {
            // User & Profile...
            Route::get('/user/profile', [UserProfileController::class, 'show'])
                ->name('profile.show');

            // API...
            if (Jetstream::hasApiFeatures()) {
                Route::get('/user/api-tokens', [ApiTokenController::class, 'index'])->name('api-tokens.index');
            }

            // Teams...
            if (Jetstream::hasTeamFeatures()) {
                Route::get('/teams/create', [TeamController::class, 'create'])->name('teams.create');
                Route::get('/teams/{team}', [TeamController::class, 'show'])->name('teams.show');
                Route::put('/current-team', [CurrentTeamController::class, 'update'])->name('current-team.update');
            }
        });
    });

});

Route::get('/foo', function () {
    // Artisan::call('storage:link');
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    $targetFolder = $_SERVER['DOCUMENT_ROOT'].'/storage/app/public';
    $linkFolder = $_SERVER['DOCUMENT_ROOT'].'/public/storage';
    echo $targetFolder;
    echo $linkFolder;

});
Route::get('/{shortlink}',function ($shortlink){
    return redirect('https://unej.id/'.$shortlink);
});
