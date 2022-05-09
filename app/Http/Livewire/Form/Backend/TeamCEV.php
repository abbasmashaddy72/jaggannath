<?php

namespace App\Http\Livewire\Form\Backend;

use App\Models\Team;
use App\Models\TeamService;
use App\Services\Helper;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithFileUploads;

class TeamCEV extends Component
{
    use WithFileUploads;

    // Model Values
    public $department_id, $name, $image, $qualification, $profile, $experience;
    public $services = [];

    // Custom Values
    public $action, $isUploaded = false, $team;

    protected $rules = [
        'name' => '',
        'image' => '',
        'qualification' => '',
        'department_id' => '',
        'profile' => '',
        'experience' => '',
        'services' => ''
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

        if (gettype($this->image) != 'string') {
            $this->isUploaded = true;
        }
    }

    public function store()
    {
        $validatedData = $this->validate();

        if (gettype($this->image) != 'string') {
            $validatedData['image'] = $this->image->store('team_images');
        }

        Team::create($validatedData);

        notify()->success('Team Saved Successfully!');

        return $this->redirectRoute('admin.team.index');
    }

    public function update()
    {
        $validatedData = $this->validate();
        if (gettype($this->image) != 'string') {
            $validatedData['image'] = $this->image->store('team_images');
        }

        $team_services = new TeamService;

        // Pending
        foreach (array_filter($validatedData['services']) as $key => $item) {
            $team_services->create(['team_id' => $this->team, 'services_id' => $key]);
        }

        unset($validatedData['services']);

        Team::where('id', $this->team)->update($validatedData);

        notify()->success('Team Updated Successfully!');

        return $this->redirectRoute('admin.team.index');
    }

    public function mount($team)
    {
        if (substr(strstr(Route::currentRouteAction(), '@'), 1) != 'create') {
            $data = Team::findOrFail($team);
            $this->name = $data->name;
            $this->image = $data->image;
            $this->qualification = $data->qualification;
            $this->department_id = $data->department_id;
            $this->profile = $data->profile;
            $this->experience = $data->experience->format('Y-m-d');
        }
        $this->services = Helper::getKeyValues('Service', 'title', 'id');
        $this->action = substr(strstr(Route::currentRouteAction(), '@'), 1);
    }

    public function render()
    {
        return view('livewire.form.backend.team-c-e-v');
    }
}
