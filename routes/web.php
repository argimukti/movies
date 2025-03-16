<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;




$movies = [];

Route::group(
    [
        'middleware' => ['isAuth'],
        'prefix' => 'movie',
        'as' => 'movie.',
    ],
    function() use ($movies){
    Route::get('/',[MovieController::class, 'index']);
    Route::get('/{id}', [MovieController::class, 'show'])->middleware(['isMember']);
    Route::post('/', [MovieController::class, 'store']);
    return $movies;
});


Route::get('/pricing', function () {
    return 'Please, Buy a membership';
});

Route::get('/login', function () {
    return 'Login Page';
})->name('login');
