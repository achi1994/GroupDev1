<?php

use App\Actions\Persons\DeletePerson;
use App\Actions\Persons\GetPerson;
use App\Actions\Persons\UpdatePerson;
use App\Actions\Tasks\addTasks;
use App\Actions\Tasks\GetTask;
use App\Actions\Tasks\UpdateTask;
use Illuminate\Http\Request;
use App\Actions\Persons\AddPerson;
use Illuminate\Support\Facades\Route;


Route::prefix('tasks')->group(function (){
    Route::post('create', addTasks::class);
    Route::put('update/{id}', UpdateTask::class);
    Route::get('getTasks', GetTask::class);
});

Route::prefix('persons')->group(function (){
  Route::post('create', AddPerson::class);
  Route::get('getPersons', GetPerson::class);
  Route::get('getPerson/{id}', GetPerson::class);
  Route::post('update/{id}', UpdatePerson::class);
  Route::delete('delete/{id}', DeletePerson::class);
});

