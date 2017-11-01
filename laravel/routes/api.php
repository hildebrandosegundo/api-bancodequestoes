<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');

Route::group(['middleware'=>[\Barryvdh\Cors\HandleCors::class, 'auth:api']], function () {
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });

    Route::resource('/areas', 'Api\Areas');
    Route::resource('/series', 'Api\Series');
    Route::resource('/categorias', 'Api\Categorias');
    Route::resource('/habilidades', 'Api\Habilidades');
    Route::resource('/nivels', 'Api\Nivels');
    Route::resource('/alternativas', 'Api\Qalternativas');
    Route::resource('/enunciados', 'Api\Qenunciados');
    Route::resource('/provas', 'Api\Provas');
    Route::resource('/questoes', 'Api\Questoes');
    Route::resource('/pquestoes', 'Api\Pquestoes');
});