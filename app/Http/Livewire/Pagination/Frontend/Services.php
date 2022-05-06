<?php

namespace App\Http\Livewire\Pagination\Frontend;

use App\Models\Department;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class Services extends Component
{
    use WithPagination;

    public $department;

    public $department_id;

    public function mount()
    {
        $this->department = Department::get();
    }

    public function render()
    {
        if ($this->department_id == null) {
            $data = Service::with('department')->paginate(6);
        } else {
            $data = Service::with('department')->where('department_id', $this->department_id)->paginate(6);
        }

        return view('livewire.pagination.frontend.services', compact('data'));
    }
}
