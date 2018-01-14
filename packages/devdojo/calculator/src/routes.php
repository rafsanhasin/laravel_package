<?php
/**
 * Created by PhpStorm.
 * User: pathao
 * Date: 8/1/18
 * Time: 12:56 PM
 */

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});
Route::get('add/{a}/{b}', 'Devdojo\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Devdojo\Calculator\CalculatorController@subtract');
Route::get('all', 'Devdojo\Calculator\CalculatorController@all');