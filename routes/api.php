<?php

use App\Actions\Tasks\addTasks;
use App\Actions\Tasks\GetTask;
use App\Actions\Tasks\UpdateTask;
use Illuminate\Http\Request;
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
});

Route::prefix('products')->group(function (){
    Route::get('getProducts', getProducts::class);
    Route::post('createProduct', addProduct::class);
    Route::get('getProduct/{id}', getSingleProduct::class);
    Route::put('updateProduct/{id}', updateProduct::class);
    Route::delete('deleteProduct/{id}', deleteProduct::class);
});
