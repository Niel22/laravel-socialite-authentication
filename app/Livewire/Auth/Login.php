<?php

namespace App\Livewire\Auth;

use App\Action\Auth\Login as AuthLogin;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    protected $rules = [
        'email' => ['required', 'email'],
        'password' => ['required', 'min:8']
    ];

    public function login(AuthLogin $action){

        if($action->execute($this->validate())){
            $this->redirect('/');
        }

        $this->addError('email', 'Invalid password or email');
    }

    #[Layout('components.layouts.auth')]
    public function render()
    {
        return view('livewire.auth.login');
    }
}
