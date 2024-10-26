<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/loggable', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/log', function () {

   Log::info('LogHole is working!');

    //get the logs from redis
    //Non-static method Redis::lrange() cannot be called statically

    return "done logging";
});

Route::get('/redis', function () {
    $count = 0;
    // Obtém a conexão Redis da aplicação
    $redis = Redis::connection();

    // Conecta ao Redis e obtém as entradas na lista de logs
    $logs = $redis->lrange('logs', 0, $count > 0 ? $count - 1 : -1);

    // Decodifica cada entrada de log (assumindo que as mensagens são armazenadas em JSON)
    return array_map(fn($log) => json_decode($log, true), $logs);
});
