<?php

namespace App\Http\Livewire\Form\Backend;

use App\Models\Package;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class PackageCEV extends Component
{
    // Model Values
    public $name;

    // Custom Values
    public $action, $isUploaded = false, $package;

    protected $rules = [
        'name' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $validatedData = $this->validate();

        Package::create($validatedData);

        notify()->success('Package Saved Successfully!');

        return $this->redirectRoute('admin.package.index');
    }

    public function update()
    {
        $validatedData = $this->validate();

        Package::where('id', $this->package)->update($validatedData);

        notify()->success('Package Updated Successfully!');

        return $this->redirectRoute('admin.package.index');
    }

    public function mount($package)
    {
        if (substr(strstr(Route::currentRouteAction(), '@'), 1) != 'create') {
            $data = Package::findOrFail($package);
            $this->name = $data->name;
        }
        $this->action = substr(strstr(Route::currentRouteAction(), '@'), 1);
    }

    public function render()
    {
        return view('livewire.form.backend.package-c-e-v');
    }
}
