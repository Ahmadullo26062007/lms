<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class LoginLivewire extends Component
{
    public $phone_number,$password,$user_yoq=false;

    protected $rules=[

        'phone_number'=>'required|min:9|max:9',
        'password'=>'required|min:8',

    ];

    protected $messages=[
        'password.required'=>"Password not entered.",
        'password.min'=>"Password length is less than 8",
        'phone_number.required'=>"Phone number not entered.",
        'phone_number.min'=>"The length of the phone number should not be less than 9",
        'phone_number.max'=>"The phone number should not be more than 9 in length",
    ];

    public function login()
    {
        $this->validate();
        $user = User::where('phone_number',$this->phone_number)->first();

        if($user){
            if(Hash::check($this->password,$user->password)){

                $this->user_yoq=false;
                Auth::login($user);

                return redirect()->route('admin');
            }else{
                $this->user_yoq=true;
            }
        }else{
            $this->user_yoq=true;
        }
        }
    public function render()
    {
        return view('livewire.login-livewire');
    }
}
