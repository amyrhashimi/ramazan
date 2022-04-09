<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use App\Rules\Recaptcha;
use Livewire\Component;

class Register extends Component
{
    public User $user;
    public $terms;
    public $recaptcha;


    public function mount()
    {
        $this->user = new User();
    }

    protected function rules()
    {
        return [
            "user.username" => "required|min:4|max:20|unique:users,username|unique:teachers,username|regex:/^[a-zA-Z][0-9a-zA-Z_]{2,23}[0-9a-zA-Z]$/",
            "user.password" => "required|min:6",
            "recaptcha" => ['required' , new Recaptcha ],
        ];
    }


    public function updated($Name)
    {
        $this->validateOnly($Name);
    }

    public function render(){

        return view('livewire.auth.register')->layout('layouts.base');
    }

    public function submit(){

        $this->validate();

        $this->user->password = bcrypt($this->user->password);
        $this->user->name = $this->user->username;
        $this->user->language = "en";
        $this->user->save();
        //$this->emit('toast', 'success','ثبت نام شما با موفقیت انجام شد.');
        return back();

    }
}
