<?php

use App\Actions\Music\AddMusic;
use App\Actions\Music\DeleteMusic;
use App\Actions\Music\GetMusic;
use App\Actions\Music\GetSingleMusic;
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

Route::prefix('music')->group(function () {
    Route::post('/add', AddMusic::class); // Add a new music record
    Route::get('/', GetMusic::class);    // Fetch all music records
    Route::get('/{id}', GetSingleMusic::class); // Fetch a single music record by ID
    Route::put('/update/{id}', UpdateMusic::class); // Update an existing record
    Route::delete('/delete/{id}', DeleteMusic::class);
});
