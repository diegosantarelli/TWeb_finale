<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class userController extends Controller {

    public function showHomeUser():View {
        return view('homeuser'); //alternativa di can:isUser come definito nell'AdminController
    }



}
