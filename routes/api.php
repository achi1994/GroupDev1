<?php

use App\Actions\Cities\AddCity;
use App\Actions\Cities\DeleteCity;
use App\Actions\Cities\GetCities;
use App\Actions\Cities\GetCity;
use App\Actions\Cities\UpdateCity;
use App\Actions\Countries\AddCountry;
use App\Actions\Countries\DeleteCountry;
use App\Actions\Countries\GetCountries;
use App\Actions\Countries\GetCountry;
use App\Actions\Countries\UpdateCountry;
use App\Actions\Persons\DeletePerson;
use App\Actions\Persons\GetPerson;
use App\Actions\Persons\UpdatePerson;
use App\Actions\Persons\GetPersons;
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
  Route::get('getPersons', GetPersons::class);
  Route::get('getPerson/{id}', GetPerson::class);
  Route::post('update/{id}', UpdatePerson::class);
  Route::delete('delete/{id}', DeletePerson::class);
});

Route::prefix('countries')->group(function (){
   Route::post('create', AddCountry::class);
   Route::get('getCountry/{id}', GetCountry::class);
   Route::get('getCountries', GetCountries::class);
   Route::post('update/{id}', UpdateCountry::class);
   Route::delete('delete/{id}', DeleteCountry::class);
});

Route::prefix('cities')->group(function (){
    Route::post('create', AddCity::class);
    Route::get('getCity/{id}', GetCity::class);
    Route::get('getCities', GetCities::class);
    Route::post('update/{id}', UpdateCity::class);
    Route::delete('delete/{id}', DeleteCity::class);
});
