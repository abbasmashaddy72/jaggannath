<?php

namespace App\Http\Livewire\Form\Backend;

use App\Services\Helper;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class TermsCEV extends Component
{
    public $terms_description;

    public function mount()
    {
        $this->terms_description = Helper::get_static_option('terms_description');
    }

    protected $rules = [
        'terms_description' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        abort_if(Gate::denies('terms'), 403);

        $validatedData = $this->validate();

        foreach ($validatedData as $key => $value) {
            Helper::set_static_option($key, $value);
        }

        return $this->redirectRoute('admin.terms');
    }

    public function render()
    {
        return view('livewire.form.backend.terms-c-e-v');
    }
}
