<?php

use App\Actions\Persons\DeletePerson;
use App\Actions\Persons\GetPerson;
use App\Actions\Persons\UpdatePerson;
use App\Actions\Tasks\addTasks;
use App\Actions\Tasks\DeleteTask;
use App\Actions\Tasks\GetTask;
use App\Actions\Tasks\ShowTask;
use App\Actions\Tasks\UpdateTask;
use Illuminate\Http\Request;
use App\Actions\Persons\AddPerson;

use Illuminate\Support\Facades\Route;

use App\Actions\Products\getProducts;
use App\Actions\Products\addProduct;
use App\Actions\Products\getSingleProduct;
use App\Actions\Products\updateProduct;
use App\Actions\Products\deleteProduct;


Route::prefix('tasks')->group(function (){
    Route::post('create', addTasks::class);
    Route::put('update/{id}', UpdateTask::class);
    Route::get('getTasks', GetTask::class);
    Route::get('{id}', ShowTask::class);
    Route::delete('delete/{id}', DeleteTask::class);
});

Route::prefix('products')->group(function (){
    Route::get('getProducts', getProducts::class);
    Route::post('createProduct', addProduct::class);
    Route::get('getProduct/{id}', getSingleProduct::class);
    Route::put('updateProduct/{id}', updateProduct::class);
    Route::delete('deleteProduct/{id}', deleteProduct::class);
});

Route::prefix('persons')->group(function (){
  Route::post('create', AddPerson::class);
  Route::get('getPersons', GetPerson::class);
  Route::get('getPerson/{id}', GetPerson::class);
  Route::post('update/{id}', UpdatePerson::class);
  Route::delete('delete/{id}', DeletePerson::class);
});

