<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    // not a store method ...
    public function store()
    {
        auth()->logout();

        return redirect()->route('home');
    }
}
