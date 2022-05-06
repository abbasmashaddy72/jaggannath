<?php

namespace App\Http\Livewire\Tables\Backend;

use App\Models\Team;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class TeamTable extends LivewireDatatable
{
    public $model = Team::class;
    public $exportable = true;

    public function builder()
    {
        return Team::query()->with('department');
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

            Column::name('name')
                ->searchable()
                ->filterable()
                ->label('Name'),

            Column::name('qualification')
                ->searchable()
                ->filterable()
                ->label('Qualification'),

            Column::name('department.name')
                ->searchable()
                ->filterable()
                ->label('Department'),

            Column::name('profile')
                ->searchable()
                ->truncate(20)
                ->label('Profile'),

            NumberColumn::name('experience')
                ->label('Experience')
                ->filterable(),

            Column::callback(['id'], function ($id) {
                return view('pages.backend.teams.actions', ['id' => $id]);
            })->excludeFromExport()->unsortable()->label('Action'),
        ];
    }
}
