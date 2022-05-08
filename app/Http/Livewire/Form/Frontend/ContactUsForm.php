<?php

namespace App\Http\Livewire\Form\Frontend;

use App\Models\ContactUs;
use Livewire\Component;

class ContactUsForm extends Component
{
    public $name, $email, $contact_number, $address, $questions, $success;

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

    private function clearFields()
    {
        $this->name = '';
        $this->email = '';
        $this->contact_number = '';
        $this->address = '';
        $this->questions = '';
    }

    public function submit()
    {
        $validatedData = $this->validate();

        ContactUs::create($validatedData);

        $this->success = 'Thanks for Contacting Us. We will Contact you ASAP!';

        $this->clearFields();
    }

    public function render()
    {
        return view('livewire.form.frontend.contact-us-form');
    }
}
