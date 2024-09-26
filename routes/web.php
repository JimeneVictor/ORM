<?php

use App\Models\User;

Route::get('/', function () {
    $users = User::get();
    
    return view('welcome',['users' => $users]);
});
