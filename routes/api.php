<?php

use App\Actions\Music\AddMusic;
use App\Actions\Music\DeleteMusic;
use App\Actions\Music\GetMusic;
use App\Actions\Music\UpdateMusic;
use App\Actions\Tasks\addTasks;
use App\Actions\Tasks\GetTask;
use App\Actions\Tasks\UpdateTask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('tasks')->group(function (){
    Route::post('create', addTasks::class);
    Route::put('update/{id}', UpdateTask::class);
    Route::get('getTasks', GetTask::class);
});

Route::prefix('music')->group(function (){
    Route::post('create', AddMusic::class);
    Route::get('getMusic', GetMusic::class);
    Route::put('update/{id}', UpdateMusic::class);
    Route::delete('delete/{id}', DeleteMusic::class);
});
