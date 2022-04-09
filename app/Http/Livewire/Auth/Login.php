<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use App\Rules\Recaptcha;
use Livewire\Component;
use Auth;

class Login extends Component
{

    public User $user;
    public $recaptcha;

    public function mount()
    {
        $this->user = new User();
    }

    protected function rules()
    {
        return [
            "user.username" => "required|min:4|max:20|regex:/^[a-zA-Z][0-9a-zA-Z_]{2,23}[0-9a-zA-Z]$/",
            "user.password" => "required|min:6",
            "recaptcha" => ['required' , new Recaptcha ],
        ];
    }

    public function updated($Name)
    {
        $this->validateOnly($Name);
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('layouts.base');
    }

    public function submit(){

        $data = $this->validate();
        //dd($data['user']);

        if (Auth::attempt($data['user'])) {
            request()->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        $this->addError('user.username', 'The provided credentials do not match our records.');

    }

}
