<?php

namespace App\Http\Livewire\Form\Backend;

use App\Models\Faq;
use App\Models\Team;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithFileUploads;

class FaqCEV extends Component
{
    // Model Values
    public $question, $answer;

    // Custom Values
    public $action, $faq;

    protected $rules = [
        'question' => '',
        'answer' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        abort_if(Gate::denies('faq_add'), 403);

        $validatedData = $this->validate();

        Faq::create($validatedData);

        notify()->success('Faq Saved Successfully!');

        return $this->redirectRoute('admin.faq.index');
    }

    public function update()
    {
        abort_if(Gate::denies('faq_edit'), 403);

        $validatedData = $this->validate();

        Faq::where('id', $this->faq)->update($validatedData);

        notify()->success('Faq Updated Successfully!');

        return $this->redirectRoute('admin.faq.index');
    }

    public function mount($faq)
    {
        if (substr(strstr(Route::currentRouteAction(), '@'), 1) != 'create') {
            $data = Faq::findOrFail($faq);
            $this->question = $data->question;
            $this->answer = $data->answer;
        }
        $this->action = substr(strstr(Route::currentRouteAction(), '@'), 1);
    }

    public function render()
    {
        return view('livewire.form.backend.faq-c-e-v');
    }
}
