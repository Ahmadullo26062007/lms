<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class RegisterLivewire extends Component
{
    public $name,$phone_number,$email, $password,$password_confirmation;

    protected $rules=[
        'name'=>'required',
        'phone_number'=>'required|min:9|max:9',
        'email'=>'required',
        'password'=>'required|min:8|confirmed',
        'password_confirmation'=>'required|min:8',

    ];

    protected $messages=[
        'name.required'=>'Name not entered',
        'email'=>'Email not entered',
        'password.required'=>"Password not entered.",
        'password.min'=>"Password length is less than 8",
        'password_confirmation.min'=>"Password length is less than 8",
        'password_confirmation'=>"Password confirmation not entered",
        'phone_number.required'=>"Phone number not entered.",
        'phone_number.min'=>"The length of the phone number should not be less than 9",
        'phone_number.max'=>"The phone number should not be more than 9 in length",
    ];

    public function register()
    {


        $this->validate();

        $user= User::create([
            'name'=>$this->name,
            'phone_number'=>$this->phone_number,
            'email'=>$this->email,
            'password'=>bcrypt( $this->password),

        ]);
        if ($user){
            return redirect()->route('admin');
        }

    }
    public function render()
    {
        return view('livewire.register-livewire');
    }
}
