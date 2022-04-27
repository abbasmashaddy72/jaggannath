<?php

namespace App\Http\Livewire\Form\Frontend;

use App\Models\BookAppointment;
use Livewire\Component;

class BookAppointmentForm extends Component
{
    public $name;
    public $email;
    public $gender;
    public $phone;
    public $age;
    public $address;
    public $previous_record;
    public $previous_record_description;
    public $appointment_date;
    public $appointment_time;

    public $success;

    protected $rules = [
        'name' => '',
        'email' => '',
        'gender' => '',
        'phone' => '',
        'age' => '',
        'address' => '',
        'previous_record' => '',
        'previous_record_description' => '',
        'appointment_date' => '',
        'appointment_time' => '',
    ];

    public function submit()
    {
        $validatedData = $this->validate();

        BookAppointment::create($validatedData);

        $this->success = 'Thanks for Booking Appointment. We will Contact you ASAP!';

        $this->clearFields();
    }

    private function clearFields()
    {
        $this->name = '';
        $this->email = '';
        $this->gender = '';
        $this->phone = '';
        $this->age = '';
        $this->address = '';
        $this->previous_record = '';
        $this->previous_record_description = '';
        $this->appointment_date = '';
        $this->appointment_time = '';
    }
    public function render()
    {
        return view('livewire.form.frontend.book-appointment-form');
    }
}
