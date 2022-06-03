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

    public $where = null;

    public function mount()
    {
        $this->department = Department::get();
    }

    public function render()
    {
        if ($this->department_id == null && $this->where == 'homepage') {
            if (!\Jenssegers\Agent\Facades\Agent::isTablet() && \Jenssegers\Agent\Facades\Agent::isMobile()) {
                $data = Service::with('department')->paginate(8);
            } elseif (\Jenssegers\Agent\Facades\Agent::isTablet()) {
                $data = Service::with('department')->paginate(9);
            } else {
                $data = Service::with('department')->paginate(18);
            }
        } elseif ($this->department_id == null && $this->where == null) {
            if (!\Jenssegers\Agent\Facades\Agent::isTablet() && \Jenssegers\Agent\Facades\Agent::isMobile()) {
                $data = Service::with('department')->paginate(8);
            } elseif (\Jenssegers\Agent\Facades\Agent::isTablet()) {
                $data = Service::with('department')->paginate(9);
            } else {
                $data = Service::with('department')->paginate(18);
            }
        } else {
            if (!\Jenssegers\Agent\Facades\Agent::isTablet() && \Jenssegers\Agent\Facades\Agent::isMobile()) {
                $data = Service::with('department')->where('department_id', $this->department_id)->paginate(8);
            } elseif (\Jenssegers\Agent\Facades\Agent::isTablet()) {
                $data = Service::with('department')->where('department_id', $this->department_id)->paginate(9);
            } else {
                $data = Service::with('department')->where('department_id', $this->department_id)->paginate(18);
            }
        }

        return view('livewire.pagination.frontend.services', compact('data'));
    }
}
