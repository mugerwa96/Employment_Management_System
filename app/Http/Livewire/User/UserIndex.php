<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class UserIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = "";
    public $username;
    public $firstname;
    public $lastname;
    public $email;

    // validation rules
    protected function rules()
    {


        $this->validate(
            [
                'username' => 'required|string|min:5|max:10|unique:users,username',
                'firstname' => 'required|string|min:5|max:10',
                'lastname' => 'required|string|min:5|max:10',
                'email' =>'required|email|regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/'
            ],
            [
                'username.required' => 'Username is required please',
                'username.unique' => 'Username already registered',
                'firstname.required' => 'firstname is required please',
                'lastname.required' => 'lastname is required please',
                'email.required' => 'email is required please',
                'email.email' => 'provide a valid email address please',
            ]
        );
    }

    // realtime validtion
    public function updated()
    {
        $this->rules();
    }

    public function saveUser()
    {
        $this->rules();
        $user=new User();
        $user->username=$this->username;
        $user->firstname=$this->firstname;
        $user->lastname=$this->lastname;
        $user->email=$this->email;
        $user->password=Hash::make(12345678);
        $user->save();
        $this->dispatchBrowserEvent('message',[
            'text'=>'User created successfully',
            'type'=>'success'
        ]);
        $this->closeModel();
    }
    public function closeModel()
    {
        $this->reset();
        $this->dispatchBrowserEvent('closeUserModel');
    }

    // openCreateMOdal

    public function openUserCreateModel()
    {
        $this->dispatchBrowserEvent('openUserCreateModel');
    }

    public function render()
    {
        if (strlen($this->search) > 2) {
            $users = User::where('username', 'like', '%' . $this->search . '%')->paginate(5);
        } else {

            $users = User::orderBy('id', 'desc')
                ->paginate(5);
        }
        return view('livewire.user.user-index', compact('users'))
            ->extends('layouts.AdminPanel.layout.admin')
            ->section('main-content');
    }
}
