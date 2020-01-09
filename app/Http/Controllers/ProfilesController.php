<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function index(\App\User $user)
    {
        return view('profiles/index', [
          'user' => $user,
        ]);
    }
}
