<?php

use App\Http\Controllers\Manage\AboutController;
use App\Http\Controllers\Manage\AhliController;
use App\Http\Controllers\Manage\ClientController;
use App\Http\Controllers\Manage\ContactController;
use App\Http\Controllers\Manage\ServiceController;
use App\Http\Controllers\Manage\TeamController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WelcomeController::class, 'index'])
    ->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');
Route::get('about-us', [App\Http\Controllers\Frontend\AboutController::class, 'index'])
    ->name('page.about');
Route::get('client-list', [App\Http\Controllers\Frontend\ClientController::class, 'index'])
    ->name('page.client');
Route::get('service', [App\Http\Controllers\Frontend\ServiceController::class, 'index'])
    ->name('page.service');
Route::get('contact-us', [App\Http\Controllers\Frontend\ContactController::class, 'index'])
    ->name('page.contact');
Route::get('team/{id}', [App\Http\Controllers\Frontend\TeamController::class, 'show'])
    ->name('page.team');
Route::get('ahli', [App\Http\Controllers\Frontend\AhliController::class, 'index'])
    ->name('page.ahli');
Route::get('ahli/{id}', [App\Http\Controllers\Frontend\AhliController::class, 'show'])
    ->name('show.ahli');

Route::group(['middleware' => ['auth'],'prefix' => 'manage'], function () {

    //Route About
    Route::get('about', [AboutController::class, 'index'])
        ->name('about.manage.index');
    Route::get('about/create', [AboutController::class, 'create'])
        ->name('about.manage.create');
    Route::post('about/store', [AboutController::class, 'store'])
        ->name('about.manage.store');
    Route::get('about/edit/{id}', [AboutController::class, 'edit'])
        ->name('about.manage.edit');
    Route::post('about/update/{id}', [AboutController::class, 'update'])
        ->name('about.manage.update');
    Route::get('about/delete/{id}', [AboutController::class, 'destroy'])
        ->name('about.manage.destory');

    //Route Client
    Route::get('client', [ClientController::class, 'index'])
        ->name('client.manage.index');
    Route::get('client/create', [ClientController::class, 'create'])
        ->name('client.manage.create');
    Route::post('client/store', [ClientController::class, 'store'])
        ->name('client.manage.store');
    Route::get('client/edit/{id}', [ClientController::class, 'edit'])
        ->name('client.manage.edit');
    Route::post('client/update/{id}', [ClientController::class, 'update'])
        ->name('client.manage.update');
    Route::get('client/delete/{id}', [ClientController::class, 'destroy'])
        ->name('client.manage.destroy');

    //Route Contact
    Route::get('contact', [ContactController::class, 'index'])
        ->name('contact.manage.index');
    Route::get('contact/create', [ContactController::class, 'create'])
        ->name('contact.manage.create');
    Route::post('contact/store', [ContactController::class, 'store'])
        ->name('contact.manage.store');
    Route::get('contact/edit', [ContactController::class, 'edit'])
        ->name('contact.manage.edit');
    Route::post('contact/update', [ContactController::class, 'update'])
        ->name('contact.manage.update');
    Route::get('contact/delete', [ContactController::class, 'destroy'])
        ->name('contact.manage.destroy');

    //Route Services
    Route::get('services', [ServiceController::class, 'index'])
        ->name('service.manage.index');
    Route::get('services/create', [ServiceController::class, 'create'])
        ->name('services.manage.create');
    Route::post('services/store', [ServiceController::class, 'store'])
        ->name('services.manage.store');
    Route::get('services/edit', [ServiceController::class, 'edit'])
        ->name('services.manage.edit');
    Route::post('services/update', [ServiceController::class, 'update'])
        ->name('services.manage.update');
    Route::post('services/delete', [ServiceController::class, 'destroy'])
        ->name('services.manage.destroy');

    //Route Team
    Route::get('team', [TeamController::class, 'index'])
        ->name('team.manage.index');
    Route::get('team/create', [TeamController::class, 'create'])
        ->name('team.manage.create');
    Route::post('team/store', [TeamController::class, 'store'])
        ->name('team.manage.store');
    Route::get('team/edit', [TeamController::class, 'edit'])
        ->name('team.manage.edit');
    Route::post('team/update', [TeamController::class, 'update'])
        ->name('team.manage.update');
    Route::get('team/delete/{id}', [TeamController::class, 'destroy'])
        ->name('team.manage.destroy');

    //Route Ahli
    Route::get('ahli', [AhliController::class, 'index'])
        ->name('ahli.manage.index');
    Route::get('ahli/create', [AhliController::class, 'create'])
        ->name('ahli.manage.create');
    Route::post('ahli/store', [AhliController::class, 'store'])
        ->name('ahli.manage.store');
    Route::get('ahli/delete/{id}', [AhliController::class, 'destroy'])
        ->name('ahli.manage.destroy');
});
