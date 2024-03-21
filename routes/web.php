<?php
 
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WelcomeController;
 
Route::get('/', [WelcomeController::class, 'index']);

 
Auth::routes();




Route::get('/vTravel', [WelcomeController::class, 'vTravel'])->name('audience.vTravel');

Route::get('/vTravel/{id}/detail', [WelcomeController::class, 'travelDetail'])->name('audience.vDetail');

Route::get('/vNews', [WelcomeController::class, 'vNews'])->name('audience.vNews');

Route::get('/vRanking', [WelcomeController::class, 'vRanking'])->name('audience.vRanking');

Route::get('/vComment', [WelcomeController::class, 'vComment'])->name('audience.vComment');




//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
   
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

//admin
Route::get('/admin/manageU', [AdminController::class, 'manageU'])->name('admin.manageU');
// routes/web.php
Route::get('/admin/manageU', [AdminController::class, 'manageUsers'])->name('admin.manageU');
Route::delete('/admin/manageU/{id}', [AdminController::class, 'deleteUser'])->name('admin.deleteUser');
Route::post('/admin/addUser', [AdminController::class, 'addUser'])->name('admin.addUser');

Route::get('/admin/addTravel', [AdminController::class, 'addTravel'])->name('admin.addTravel');

Route::get('/admin/detail/{id}', [AdminController::class, 'addDetail'])->name('admin.detail');

Route::post('/admin/storeTravel', [AdminController::class, 'storeTravel'])->name('admin.storeTravel');

Route::get('/admin/addNews', [AdminController::class, 'addNews'])->name('admin.addNews');
Route::post('/admin/addNews', [AdminController::class, 'storeNews'])->name('admin.storeNews');
Route::post('/admin/update-news', [NewsController::class, 'update'])->name('admin.updateNews');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profileAdmin');
    Route::put('/admin/profile/update', [AdminController::class, 'updateProfile'])->name('admin.update.profile');
    Route::put('/admin/update-password', [AdminController::class, 'updatePassword'])->name('admin.update.password');
});

Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
Route::post('/admin/update/{id}', [AdminController::class, 'updateTravel'])->name('admin.update');

Route::put('/travels/{id}', [TravelController::class, 'update'])->name('travels.update');

Route::delete('/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');

Route::get('/admin/travelList', [AdminController::class, 'travelList'])->name('admin.travelList');

Route::get('/admin/rank', [AdminController::class, 'rank'])->name('admin.rank');







//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
   
    Route::get('/home', [HomeController::class, 'home'])->name('home');
});

//User
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::put('/update-profile', [UserController::class, 'updateProfile'])->name('update.profile');
Route::put('/update-password', [UserController::class, 'updatePassword'])->name('update.password');

Route::get('/travel', [UserController::class, 'travel'])->name('travel');
//Route::get('/cards', [UserController::class, 'travel'])->name('cards');
Route::get('/tourism/{id}/detail', [UserController::class, 'showDetail'])->name('detail');

Route::get('/comment', [UserController::class, 'showForm'])->name('comment.form');

Route::get('/favorite', [UserController::class, 'favorite'])->name('favorite');

Route::get('/ranking', [UserController::class, 'ranking'])->name('ranking');

Route::get('/news', [UserController::class, 'news'])->name('news');
