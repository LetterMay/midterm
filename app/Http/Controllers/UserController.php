<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {
        $uss = User::orderBy('lname')->get();

        return view('users.users', ['users'=>$uss]);
    }
}
