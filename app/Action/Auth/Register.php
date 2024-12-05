<?php

namespace App\Action\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Validator;

class Register{
    
    public function execute($request){

        return User::create($request) ?? false;

    }

}