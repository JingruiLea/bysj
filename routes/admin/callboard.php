<?php
$router->group(['prefix' => 'callboard'],function ($router)
{
    $router->get('ajaxIndex','CallboardController@ajaxIndex')->name('permission.ajaxIndex');
    $router->get('i18n','CallboardController@dataTableI18n');
    $router->get('createArticle','CallboardController@createArticle');
    $router->get('{id}','CallboardController@getArticle');
    $router->get('{id}/edit','CallboardController@editArticle');
});
$router->resource('callboard','CallboardController');