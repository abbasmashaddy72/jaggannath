<?php

namespace App\Http\Livewire\Form\Frontend;

use App\Models\Subscribe;
use Livewire\Component;

class Newsletter extends Component
{
    public $email;

    public $success;

    protected $rules = [
        'email' => 'required|email',
    ];

    public function submit()
    {
        $validatedData = $this->validate();

        Subscribe::create($validatedData);

        $this->success = 'Thanks for subscribing!';

        $this->clearFields();
    }

    private function clearFields()
    {
        $this->email = '';
    }

    public function render()
    {
        return view('livewire.form.frontend.newsletter');
    }
}
