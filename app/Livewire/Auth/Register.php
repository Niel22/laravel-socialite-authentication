<?php

namespace App\Livewire\Auth;

use App\Action\Auth\Register as AuthRegister;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Register extends Component
{
    public $email, $password;

    protected $rules = [
        'email' => ['required', 'email', 'unique:users,email'],
        'password' => ['required', 'min:8']
    ];

    public function register(AuthRegister $action){
        
        if($action->execute($this->validate())){
            $this->redirect('/');
        }
    }

    

    #[Layout('components.layouts.auth')]
    public function render()
    {
        return view('livewire.auth.register');
    }
}
