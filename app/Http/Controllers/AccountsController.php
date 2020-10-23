<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accounts;

class AccountsController extends Controller
{
    public function index() {
        $ma = Accounts::orderBy('acct_name')->get();

        return view('accounts.accounts', ['accounts'=>$ma]);
    }
}
