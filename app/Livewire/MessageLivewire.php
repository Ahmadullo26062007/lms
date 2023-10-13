<?php

namespace App\Livewire;

use Livewire\Component;

class MessageLivewire extends Component
{
    public $message,$suply_text;

    public function mount($message)
    {
        $this->message=$message;
    }

    public function send()
    {
        $this->message->update([
            'suply_text'=>$this->suply_text
        ]);
        return redirect()->route('messages.index');
    }
    public function render()
    {
        return view('livewire.message-livewire');
    }
}
