<?php

$router->get('/', function () use ($router) {
    return 'Neuronation Code Challenge...';
});

$router->group(['prefix' => 'api/v1'], function () use ($router) {

    // SiteUsers routes
    $router->group(['prefix' => 'user'], function () use ($router) {
        $router->get('history/{id}', ['uses' => 'UserStatisticController@getUserHistory']);
        $router->get('recent-trained/{id}', ['uses' => 'UserStatisticController@getUserRecentTrained']);
    });

});

