<?php
$router->group(['prefix' => 'checkinlist'],function ($router)
{
    $router->get('ajaxIndex','CheckinlistController@ajaxIndex');
    $router->get('i18n','CheckinlistController@dataTableI18n');
    $router->get('createArticle','CheckinlistController@createArticle');
    $router->get('qrcode','CheckinlistController@getQrcode');
    $router->get('user','CheckinlistController@checkIn');
});
$router->resource('checkinlist','CheckinlistController');