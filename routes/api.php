<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group([
    // 'middleware' => 'auth:api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/register', 'AuthController@register');
    Route::post('/login', 'AuthController@login');
    Route::post('/change-pass','AuthController@changePassWord');  
    Route::get('/user-profile', 'AuthController@userProfile');  
    Route::get('/check-auth', 'AuthController@checkLogin');  
    // Route::post('/login', [AuthController::class, 'login']);
    // Route::post('/register', [AuthController::class, 'register']);
    // Route::post('/logout', [AuthController::class, 'logout']);
    // Route::post('/refresh', [AuthController::class, 'refresh']);
    // Route::get('/user-profile', [AuthController::class, 'userProfile']);  
});

Route::group([
    'middleware' => 'auth:api',
    'prefix' => 'user',
], function () {
    Route::get('/', 'Api\UserManagerController@index');
    Route::get('/{id}', 'Api\UserManagerController@show');
    // Route::post('/put-email', 'Api\UserManagerController@create');
    // Route::get('/get', 'Api\UserManagerController@create');
    // Route::post('/delete/{id}', 'Api\UserManagerController@delete');
    // Route::post('/delete-all', 'Api\UserManagerController@deleteAll');
    // Route::get('/send-mail', 'Api\UserManagerController@mailSend');
    Route::post('/update/{id}', 'Api\UserManagerController@update');
});

Route::group([
    'middleware' => 'auth:api',
    'prefix' => 'history',
], function () {
    Route::get('/plays', 'Api\HistoryPlayManagerController@index');
    Route::get('/play/{id}', 'Api\HistoryPlayManagerController@show');
    Route::get('/transactions', 'Api\TransactionManagerController@index');
    Route::get('/transaction/{id}', 'Api\TransactionManagerController@show');
});
Route::group([
    'middleware' => 'auth:api',
    'prefix' => 'admin',
], function () {
    Route::get('/sys', 'Api\SystemManagerController@index');  
    Route::post('/sys/update', 'Api\SystemManagerController@update');  
});

Route::group([
    'middleware' => 'auth:api',
    'prefix' => 'game',
], function () {
    Route::get('/config', 'Api\GameManagerController@index');
    Route::post('/config/update', 'Api\GameManagerController@update');
    Route::get('/league', 'Api\EventLeagueManagerController@index');
    Route::post('/league/update/{id}', 'Api\EventLeagueManagerController@update');
});

Route::group([
    'middleware' => 'auth:api',
    'prefix' => 'banner',
], function () {
    Route::get('/', 'Api\BannerManagerController@index');  
    Route::get('/{id}', 'Api\BannerManagerController@show');  
    Route::post('/add', 'Api\BannerManagerController@store');  
    Route::post('/update/{id}', 'Api\BannerManagerController@update');  
    Route::post('/delete/{id}', 'Api\BannerManagerController@destroy');  
});

Route::group([
    'middleware' => 'auth:api',
    'prefix' => 'game-list',
], function () {
    Route::get('/', 'Api\GameListManagerController@index');
    Route::get('/{id}', 'Api\GameListManagerController@show');
    Route::post('/update/{id}', 'Api\GameListManagerController@update');
});


//user 

Route::group([
    'prefix' => 'show',
], function () {
    Route::get('/banner', 'Api\BannerController@index');  
    Route::get('/banner/{id}', 'Api\BannerController@show');  
});
