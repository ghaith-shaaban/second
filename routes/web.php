<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\passController;
use App\Http\Controllers\projectsController;
use App\Http\Controllers\servicesController;
use App\Http\Controllers\teamsController;
use App\Http\Controllers\usersController;
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

Route::get('/', [pagesController::class,'main'])->name('main');

route::get('/services',[pagesController::class,'service'])->name('service');

route::get('/about-us',[pagesController::class,'aboutUs'])->name('about-us');

route::get('/services-details',[pagesController::class,'details'])->name('service-details');

/*----------------------------------------------------*/

route::group(['middleware'=>['auth','isAdmin'],'prefix'=>'admin/','as'=>'admin.'] ,function(){

    route::get('',[pagesController::class,'admin'])->name('dashboard');

    /*----------------------------------------------------*/

    route::group(['prefix'=>'teams/','as'=>'teams.'] ,function(){

        route::get('/show',[teamsController::class,'showTeam'])->name('show');

        route::get('/create',[teamsController::class,'createTeam'])->name('create');

        route::post('/',[teamsController::class,'storeTeam'])->name('store');

        route::get('edit/{team}',[teamsController::class,'editTeam'])->name('edit');

        route::put('update/{team}',[teamsController::class,'updateTeam'])->name('update');

        route::delete('delete/{team}',[teamsController::class,'deleteTeam'])->name('delete');
    });

    /*----------------------------------------------------*/

    route::group(['prefix'=>'users/','as'=>'users.'] ,function(){

        route::get('/show',[usersController::class,'showUser'])->name('show');

        // route::get('/create',[usersController::class,'createUser'])->name('create');

        // route::post('/',[usersController::class,'storeUser'])->name('store');

        route::get('edit/{user}',[usersController::class,'editUser'])->name('edit');

        route::put('update/{user}',[usersController::class,'updateUser'])->name('update');

        route::delete('delete/{user}',[usersController::class,'deleteUser'])->name('delete');
    });

    /*----------------------------------------------------*/

    route::group(['prefix'=>'services/','as'=>'services.'] ,function(){

        route::get('/show',[servicesController::class,'showService'])->name('show');

        route::get('/create',[servicesController::class,'createService'])->name('create');

        route::post('/',[servicesController::class,'storeService'])->name('store');

        route::get('edit/{service}',[servicesController::class,'editService'])->name('edit');

        route::put('update/{service}',[servicesController::class,'updateService'])->name('update');

        route::delete('delete/{service}',[servicesController::class,'deleteService'])->name('delete');
    });

    /*----------------------------------------------------*/

    route::group(['prefix'=>'projects/','as'=>'projects.'] ,function(){

        route::get('/show',[projectsController::class,'showProject'])->name('show');

        route::get('/create',[projectsController::class,'createProject'])->name('create');

        route::post('/',[projectsController::class,'storeProject'])->name('store');

        route::get('edit/{project}',[projectsController::class,'editProject'])->name('edit');

        route::put('update/{project}',[projectsController::class,'updateProject'])->name('update');

        route::delete('delete/{project}',[projectsController::class,'deleteProject'])->name('delete');
    });
});

/*----------------------------------------------------*/

route::group(['middleware'=>'guest'] ,function(){
    Route::get('/login', [authController::class,'showLogin'])->name('show.login');

    Route::get('/register',[authController::class,'showRegister'])->name('show.register');

    Route::post('/login', [authController::class,'login'])->name('login');

    Route::post('/register', [authController::class,'register'])->name('register');

    Route::post('/logout', [authController::class,'logout'])->name('logout')->withoutMiddleware('guest');

});

Route::get('/passedit', [passController::class,'index'])->name('index');

Route::get('/passedit/reset', [passController::class,'resetShow'])->name('reset.show');

Route::post('/passedit/reset', [passController::class,'reset'])->name('reset');

Route::get('/passedit/change', [passController::class,'changeShow'])->name('change.show');

Route::post('/passedit/change', [passController::class,'change'])->name('change');

Route::get('/passedit/code', [passController::class,'codeShow'])->name('code.show');

Route::post('/passedit/code', [passController::class,'code'])->name('code');

Route::get('/passedit/set', [passController::class,'setShow'])->name('set.show');

Route::post('/passedit/set', [passController::class,'-set'])->name('set');
