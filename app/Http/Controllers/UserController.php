<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;


class userController extends Controller {

    public function showHomeUser(){
        return view('homeuser'); //alternativa di can:isUser come definito nell'AdminController
    }


    /* public function __construct() {
        $this->middleware('can:isUser');
    } */

    protected $_userModel;

    public function __construct() {
        $this->_userModel = new User;
        $this->middleware('can:isUser');
    }




}
