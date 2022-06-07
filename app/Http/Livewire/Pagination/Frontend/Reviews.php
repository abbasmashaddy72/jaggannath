<?php

namespace App\Http\Livewire\Pagination\Frontend;

use App\Models\Review;
use Livewire\Component;
use Livewire\WithPagination;

class Reviews extends Component
{
    use WithPagination;

    public $where = null;

    public function render()
    {
        if ($this->where == 'homepage') {
            if (!\Jenssegers\Agent\Facades\Agent::isTablet() && \Jenssegers\Agent\Facades\Agent::isMobile()) {
                $data = Review::latest()->paginate(1);
            } elseif (\Jenssegers\Agent\Facades\Agent::isTablet()) {
                $data = Review::latest()->paginate(2);
            } else {
                $data = Review::latest()->paginate(4);
            }
        } else {
            $data = Review::latest()->paginate(8);
        }

        return view('livewire.pagination.frontend.reviews', compact('data'));
    }
}
