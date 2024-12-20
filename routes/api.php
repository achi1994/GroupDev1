<?php

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
