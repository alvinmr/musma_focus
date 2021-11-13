<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Waktu;

class WaktuTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('Waktu Mulai', 'waktu_mulai'),
            Column::make('Waktu Selesai', 'waktu_selesai'),
            Column::make('Action')
                ->format(function ($value, $column, $row) {
                    return view('components.action-waktu', compact('row'));
                }),
        ];
    }

    public function query(): Builder
    {
        return Waktu::query();
    }
}