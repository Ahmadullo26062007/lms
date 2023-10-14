<?php

namespace App\Livewire\Teacher;

use App\Models\Salary;
use App\Models\Teachers;
use Livewire\Component;

class Edit extends Component
{
    public $subjects , $firstname, $lastname ,$subject_id,$gender , $phonenumber, $password ,$email,$type,$price,$persent,$teacher;

    public $persent_type=false;
    public $month_type=false;

    protected $rules=[
        'firstname'=>'required',
        'lastname'=>'required',
        'subject_id'=>'required',
        'gender'=>'required',
        'phonenumber'=>'required|numeric',
        'password'=>'required',
        'email'=>'required',
        'type'=>'required',
    ];

    protected $messages=[
        'firstname.required'=>'name required?',
        'lastname.required'=>'lastname required?',
        'subject_id.required'=>'subject_id required?',
        'gender.required'=>'gender required?',
        'phonenumber.required'=>'phone number required?',
        'phonenumber.numeric'=>'phone number must be number?',
        'password.required'=>'password required?',
        'email.required'=>'email required?',
        'type.required'=>'egreement required?',
    ];



    public function mount($subjects,$teacher_id)
    {
        dd($this->teacher->salary);
        $this->subjects=$subjects;
        $t=Teachers::find($teacher_id);
        $this->firstname=$t->first_name;
        $this->lastname=$t->last_name;
        $this->subject_id=$t->subject_id;
        $this->gender=$t->gender_type;
        $this->phonenumber=$t->user->phone_number;
        $this->email=$t->user->email;
        $this->password=$t->password;
        $this->teacher=$t;
//        if ($t)
//        $this->type=$t->salary->type;
    }

    public function edit()
    {
        $this->validate();

        $u= \App\Models\User::create([
            "name" => $this->firstname,
            "password" => bcrypt($this->password),
            "email" => $this->email,
            "phone_number" => $this->phonenumber
        ]);
        $t=Teachers::create([
            "first_name" => $this->firstname,
            "last_name" => $this->firstname,
            "user_id" => $u->id,
            "role_id" => '4',
            "subject_id" => $this->subject_id,
            "gender_type" => $this->gender,
        ]);
        if ($this->persent_type){
            Salary::create([
                'type'=>0,
                'taking_present'=>$this->persent,
                'price'=>'0',
            ]);
        }elseif ($this->month_type){
            Salary::create([
                'type'=>0,
                'price'=>$this->price,
                'taking_present'=>'0'
            ]);
        }
        return  redirect()->route('teachers.index');
    }

    public function render()
    {
        return view('livewire.teacher.edit');
    }
}
