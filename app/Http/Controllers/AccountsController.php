<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Accounts;

class AccountsController extends Controller
{
    //
    public function index()
    {
        $account = Accounts::where('account_number', '202021212')->first();
        return view('posts.index', compact('posts'));
    }
}
