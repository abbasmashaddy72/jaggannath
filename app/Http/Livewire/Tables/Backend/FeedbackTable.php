<?php

namespace App\Http\Livewire\Tables\Backend;

use App\Models\Feedback;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class FeedbackTable extends LivewireDatatable
{
    public $model = Feedback::class;
    public $exportable = true;

    public function builder()
    {
        return Feedback::query();
    }

    public function columns()
    {
        return [
            Column::checkbox()
                ->label('Checkbox'),

            NumberColumn::name('id')
                ->label('ID')
                ->defaultSort('desc')
                ->filterable(),

            Column::name('type')
                ->searchable()
                ->filterable(['OP', 'IP']),

            Column::name('name')
                ->searchable()
                ->filterable()
                ->label('Name'),

            NumberColumn::name('number')
                ->label('OP / IP Number')
                ->filterable(),

            Column::name('email')
                ->searchable()
                ->filterable()
                ->label('EMail'),

            NumberColumn::name('phone')
                ->label('Contact Number')
                ->filterable(),

            Column::name('how')
                ->searchable()
                ->truncate(20)
                ->label('How'),

            Column::name('initial_response')
                ->searchable()
                ->truncate(20)
                ->label('Initial Response'),

            Column::name('explanation_of_treatment')
                ->searchable()
                ->truncate(20)
                ->label('explanation_of_treatment'),

            Column::name('cost_treatment')
                ->searchable()
                ->truncate(20)
                ->label('cost_treatment'),

            NumberColumn::name('reception_rating')
                ->label('reception_rating')
                ->filterable(),

            NumberColumn::name('dmo_rating')
                ->label('dmo_rating')
                ->filterable(),

            NumberColumn::name('nurse_rating')
                ->label('nurse_rating')
                ->filterable(),

            NumberColumn::name('house_keeping')
                ->label('house_keeping')
                ->filterable(),

            NumberColumn::name('treatment_rating')
                ->label('treatment_rating')
                ->filterable(),

            Column::name('any_other')
                ->searchable()
                ->truncate(20)
                ->label('any_other'),

            DateColumn::name('created_at')
                ->filterable(),
        ];
    }
}
