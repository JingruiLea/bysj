<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
   return redirect('/admin/dash');
});

Route::get('/article/{url}', 'CallboardController@getArticle');

Auth::routes();

Route::get('/birthday','ClassfeeController@birthday');
Route::get('/birthday/list','ClassfeeController@birthdaylist');
Route::get('/birthday/i18n','InfoController@dataTableI18n');


Route::group(['prefix' => 'homework', 'middleware' => ['auth']],function ($router)
{
    $router->get('/','HomeworkController@index');
    $router->get('/i18n', 'InfoController@dataTableI18n');
    $router->get('/ajaxIndex', 'HomeworkController@ajaxIndex');
    $router->get('/upload/{id}', 'HomeworkController@upload');
    $router->post('/upload', 'HomeworkController@update');
    $router->post('/create', 'HomeworkController@createHomework');


});

Route::group(['prefix' => 'classfee', 'middleware' => ['auth']],function ($router)
{
    $router->get('/','ClassfeeController@index');
    $router->get('/i18n', 'ClassfeeController@dataTableI18n');
    $router->get('/ajaxIndex', 'ClassfeeController@ajaxIndex');
    $router->get('/upload/{id}', 'ClassfeeController@upload');
    $router->get('/create', 'ClassfeeController@create');
    $router->post('/create', 'ClassfeeController@createRecord');

});

Route::group(['prefix' => 'random', 'middleware' => ['auth']],function ($router)
{
    $router->get('/','RandomController@index');
    $router->get('/i18n', 'RandomController@dataTableI18n');
    $router->get('/ajaxIndex', 'RandomController@ajaxIndex');
    $router->get('/upload/{id}', 'RandomController@upload');
    $router->get('/list', 'RandomController@list_');
});


Route::group(['prefix' => 'userinfo', 'middleware' => ['auth']],function ($router)
{
    $router->get('/','InfoController@index');
    $router->get('/i18n', 'InfoController@dataTableI18n');
    $router->get('/ajaxIndex', 'InfoController@ajaxIndex');
});

Route::group(['prefix' => 'callboard', 'middleware' => ['auth']],function ($router)
{
	$router->get('/','CallboardController@index');
	$router->get('/i18n', 'CallboardController@dataTableI18n');
	$router->get('/ajaxIndex', 'CallboardController@ajaxIndex');
});

Route::group(['prefix' => 'admin','namespace' => 'Admin','middleware' => ['auth']],function ($router)
{
	$router->get('/dash','DashboardController@index')->name('system.index');
	$router->get('/i18n', 'DashboardController@dataTableI18n');
	// 权限
	require(__DIR__ . '/admin/permission.php');
	// 角色
	require(__DIR__ . '/admin/role.php');
	// 用户
	require(__DIR__ . '/admin/user.php');
	// 菜单
	require(__DIR__ . '/admin/menu.php');

	require(__DIR__ . '/admin/callboard.php');
    require(__DIR__ . '/admin/checkinlist.php');
	require(__DIR__ . '/admin/checkin.php');
});

// 后台系统日志
Route::group(['prefix' => 'admin/log','middleware' => ['auth','check.permission:log']],function ($router)
{
	$router->get('/','\Arcanedev\LogViewer\Http\Controllers\LogViewerController@index')->name('log.dash');
	$router->get('list','\Arcanedev\LogViewer\Http\Controllers\LogViewerController@listLogs')->name('log.index');
	$router->post('delete','\Arcanedev\LogViewer\Http\Controllers\LogViewerController@delete')->name('log.destroy');
	$router->get('/{date}','\Arcanedev\LogViewer\Http\Controllers\LogViewerController@show')->name('log.show');
	$router->get('/{date}/download','\Arcanedev\LogViewer\Http\Controllers\LogViewerController@download')->name('log.download');
	$router->get('/{date}/{level}','\Arcanedev\LogViewer\Http\Controllers\LogViewerController@showByLevel')->name('log.filter');

});
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('userinfo','InfoController');
Route::resource('homework','HomeworkController');