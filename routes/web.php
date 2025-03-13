<?php


use Illuminate\Support\Facades\Route;

for($i = 0; $i <10; $i++){
    $movies[] = [
        'title' => 'Movie' . $i,
        'year' => '2002',
        'action' => 'Adult'
    ];
}

Route::get('/movie/{id}', function($id) use ($movies){
    return $movies[$id];
})->middleware('isMember');

Route::get('/pricing', function(){
    return 'Please, Buy a membership';
});
