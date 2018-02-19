<?php
use Massy\Math\Http\Controllers\MathController;

Route::get('math', function (){
   echo "the calculator";
});

Route::get('add/{a}/{b}', "Massy\Math\Http\Controllers\MathController@add");