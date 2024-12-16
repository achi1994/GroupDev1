<?php

use App\Actions\Tasks\addTasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('tasks')->group(function (){
    Route::post('create', addTasks::class);
});
