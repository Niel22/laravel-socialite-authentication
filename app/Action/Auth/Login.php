<?php

namespace App\Action\Auth;

use Illuminate\Support\Facades\Auth;

class Login{

    public function execute($request){

        if(Auth::attempt($request)){
            return true;
        }

        return false;
    }
}