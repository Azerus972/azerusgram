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

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            
            'user' => $user,
        ]);
    }
}
