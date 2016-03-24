<?php

Route::group(['middleware' => ['web']], function () {
  Route::get('/cep/{cep}', function($cep) {
    $client = new GuzzleHttp\Client();

    $response = $client->request('GET', 'viacep.com.br/ws/'.$cep.'/json');

    return $response->getBody();
  });
});
