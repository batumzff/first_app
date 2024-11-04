<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coders', function (){
    $coders = [
        ["name"=> "mario","skill" => 75, "id"=>"1"],
        ["name"=> "luigi","skill" => 45, "id"=>"2"],
        
    ];
    return view('coders.index',["greeting"=> "hello", "coders" => $coders]);
});

Route::get('/coders/create', function () {
    return view('coders.create');
});

Route::get('/coders/{id}', function ($id){
    //fetch record with id
    return view('coders.show',["id"=>$id]);
});