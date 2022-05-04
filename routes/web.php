<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\QuestionnaireController;
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

Route::prefix('executive')->group(function () {
    Route::get('/',function(){
        return redirect()->route('login');
    });
    Auth::routes(['register' => false]);
});


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/documents',function(){
    return view('documents');
})->name('documents');

Route::get('/treaty',function(){
    return view('treaty');
})->name('treaty');

Route::get('/equipment',function(){
    return view('equipment');
})->name('equipment');

Route::get('/register',function(){
    return view('register');
})->name('register');


Route::prefix('questionnaire')->group(function () {
    Route::get('/{id}',[QuestionnaireController::class,'index'])->name('questionnaire')->where('id', '[0-9]+');
    Route::post('/{id}',[QuestionnaireController::class,'store'])->name('storeQuestionnaire')->where('id', '[0-9]+');
});

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    Route::resource('client', ClientController::class)->except(['store']);
    Route::get('client/questionnaire/{id}/{num}',[QuestionnaireController::class,'getQuest'])->name('adminGetQuestionnaire')->where('id', '[0-9]+')->where('num', '[0-9]+');
});

Route::resource('client', ClientController::class)->only('store');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');