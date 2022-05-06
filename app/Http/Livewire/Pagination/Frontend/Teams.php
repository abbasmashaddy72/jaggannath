<?php

namespace App\Http\Livewire\Pagination\Frontend;

use App\Models\Department;
use App\Models\Team;
use Livewire\Component;

class Teams extends Component
{
    public $department;

    public $department_id;

    public function mount()
    {
        $this->department = Department::get();
    }

    public function render()
    {
        if ($this->department_id == null) {
            $data = Team::with('department', 'services')->get();
        } else {
            $data = Team::with('department')->where('department_id', $this->department_id)->get();
        }

        // dd($data);
        // exit;
        return view('livewire.pagination.frontend.teams', compact('data'));
    }
}
