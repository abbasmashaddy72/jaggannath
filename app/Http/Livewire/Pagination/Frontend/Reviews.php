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

    public function mount()
    {
        $this->team = Team::get();
    }

    public function render()
    {
        if ($this->team_id == null) {
            $data = Review::with('team')->paginate(6);
        } else {
            $data = Review::with('team')->where('team_id', $this->team_id)->paginate(6);
        }

        return view('livewire.pagination.frontend.reviews', compact('data'));
    }
}
