<?php

namespace App\Http\Livewire\Pagination\Frontend;

use App\Models\Review;
use App\Models\Team;
use Livewire\Component;
use Livewire\WithPagination;

class Reviews extends Component
{
    use WithPagination;

    public $team;

    public $team_id;

    public $where = null;

    public function mount()
    {
        $this->team = Team::get();
    }

    public function render()
    {
        if ($this->team_id == null && $this->where == 'homepage') {
            if (\Jenssegers\Agent\Facades\Agent::isMobile()) {
                $data = Review::with('team')->paginate(1);
            } else {
                $data = Review::with('team')->paginate(3);
            }
        } elseif ($this->team_id == null & $this->where == null) {
            $data = Review::with('team')->paginate(6);
        } else {
            $data = Review::with('team')->where('team_id', $this->team_id)->paginate(6);
        }

        return view('livewire.pagination.frontend.reviews', compact('data'));
    }
}
