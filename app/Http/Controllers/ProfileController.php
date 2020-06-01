<?php

/*
|--------------------------------------------------------------------------
| AzerusGram by Azerus
|--------------------------------------------------------------------------
|
|Author : https://www.kmarous.fr
|Mail : developer@mybestplace.fr
|
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($username)
    {
        return view('profiles.show');
    }
}
