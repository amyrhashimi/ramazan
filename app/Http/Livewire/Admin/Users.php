<?php

namespace App\Http\Livewire\Admin;

use App\Rules\Recaptcha;
use Livewire\Component;
use Livewire\WithPagination;
Use App\Models\User;

class Users extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $userID = null;
    public User $user;

    public function mount($id = null){
        $this->userID = $id;
        $this->user = new User();
    }

    protected function rules()
    {
        return [
            "user.name" => "required",
            "user.family" => "required",
            "user.username" => "required|min:4|max:20|regex:/^[a-zA-Z][0-9a-zA-Z_]{2,23}[0-9a-zA-Z]$/",
            "user.email" => "required",
            "user.sex" => "required",
            "user.mobile" => "required",
            "user.birthday" => "required",
        ];
    }

    public function updated($Name)
    {
        $this->validateOnly($Name);
    }


    public function render()
    {
        if($this->userID){
            $view = "edit";
            $user = $this->user->find($this->userID);
            $this->user = $user;
        }else{
            $view = "index";
            $user = User::Paginate(2);
        }

        return view('livewire.admin.users.'.$view , [
            'users' => $user
        ]);
    }

    public function create(){
        $this->validate();
        $this->user->save();
    }

    public function delete($id)
    {
        $this->user->find($id)->delete();
        $this->emit('toast', 'success','User Deleted Successfully.');

    }
}
