<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AZListController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MangaListController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReadController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('shell-exec', function() {
    chdir('..');
    shell_exec('php artisan queue:work --stop-when-empty >> /dev/null 2>/dev/null &');
});
Route::get('/mangajob', [DetailController::class, 'mangajob']);
Route::get('/config-cache', function () {
    \Artisan::call('config:cache');
});
Route::get('error-page', function () {
    return view('error_page');
});
Route::get('blank-page', function () {
    return view('blank_page');
});

Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::post('api/image', [ImageController::class, 'image']);

// USER
Route::get('/user/profile', [UserController::class, 'profile'])->name('profile');
Route::get('/user/bookmark', [UserController::class, 'bookmark_list'])->name('bookmark-list');
Route::get('/user/notifications', [UserController::class, 'notifications'])->name('notifications');
Route::put('/user/read-all-notification', [UserController::class, 'readAllNotifications'])->name('readAll');
Route::get('/user/ganti-password', [UserController::class, 'ganti_password'])->name('ganti-password');
Route::put('/user/change-password', [UserController::class, 'change_password'])->name('change_password');
Route::put('/user/change-avatar', [UserController::class, 'change_avatar'])->name('change_avatar');
Route::post('/user/bookmark', [UserController::class, 'bookmark'])->name('bookmark');
Route::post('/user/unbookmark', [UserController::class, 'unbookmark'])->name('unbookmark');

// MANGA LIST
Route::get('/manga/text-mode', [MangaListController::class, 'text_mode']);
Route::get('/manga/image-mode', [MangaListController::class, 'image_mode']);
Route::get('/search', [MangaListController::class, 'search_manga']);
Route::get('/live-search', [MangaListController::class, 'live_search']);

// A-Z LIST
Route::get('az-list', [AZListController::class, 'index'])->name('az-list');
Route::get('az-list/{sort}', [AZListController::class, 'sortlist'])->name('sortlist');

// GENRE
Route::get('genre/{genre}', [GenreController::class, 'index'])->name('genre');

Route::get('/manga/page/{page}/{sort}', [MangaListController::class, 'index'])->name('manga');
Route::get('/genre/page/{page}/{genre}', [GenreController::class, 'index'])->name('genre');

// DETAIL MANGA
Route::get('/manga/{slug}', [DetailController::class, 'index'])->name('detail');
Route::post('/rate', [DetailController::class, 'rate'])->name('rate')->middleware();

Auth::routes();
//Route::post('login', [AuthController::class, 'login'])->name('login');
//Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('sign-in', [AuthController::class, 'signIn'])->name('sign-in');
Route::get('sign-up', [AuthController::class, 'signUp'])->name('sign-up');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/read/{slug}', [ReadController::class, 'index'])->name('read');

Route::get('/pages/{slug}', [PageController::class, 'index'])->name('pages');
