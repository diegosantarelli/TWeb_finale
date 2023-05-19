<?php

namespace App\Http\Controllers;

class userController extends Controller {

    public function index() {           //alternativa di can:isUser come definito nell'AdminController
        return view('user');
    }

}
