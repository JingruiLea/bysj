<?php
$router->group(['prefix' => 'checkin'],function ($router)
{
    $router->get('ajaxIndex','CheckinController@ajaxIndex')->name('permission.ajaxIndex');
    $router->get('i18n','CheckinController@dataTableI18n');
    $router->get('createArticle','CheckinController@createArticle');
    $router->get('qrcode','CheckinController@getQrcode');
    $router->get('user','CheckinController@checkIn');
});
$router->resource('checkin','CheckinController');