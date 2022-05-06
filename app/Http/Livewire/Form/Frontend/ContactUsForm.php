<?php

namespace App\Http\Livewire\Form\Frontend;

use App\Models\ContactUs;
use Livewire\Component;

class ContactUsForm extends Component
{
    public $name;
    public $email;
    public $contact_number;
    public $address;
    public $questions;

    public $success;

    protected $rules = [
        'name' => 'required',
        'email' => '',
        'contact_number' => '',
        'address' => '',
        'questions' => ''
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        ContactUs::create($validatedData);

        $this->success = 'Thanks for Contacting Us. We will Contact you ASAP!';

        $this->clearFields();
    }

    private function clearFields()
    {
        $this->name = '';
        $this->email = '';
        $this->contact_number = '';
        $this->address = '';
        $this->questions = '';
    }

    public function render()
    {
        return view('livewire.form.frontend.contact-us-form');
    }
}
