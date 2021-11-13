<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Kandidat;

class KandidatTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('Nama', 'nama')
                ->sortable()
                ->searchable(),
            Column::make('NIM', 'nim')
                ->sortable()
                ->searchable(),
            Column::make('Angkatan', 'angkatan')
                ->sortable(),
            Column::make('Fakultas', 'fakultas')
                ->sortable(),
            Column::make('Prodi', 'prodi')
                ->sortable(),
            // Column::make('Visi', 'visi'),
            // Column::make('Misi', 'misi'),
            Column::make('Foto')
                ->format(function ($value) {
                    echo '<img class="img-fluid" src="' . asset($value) . '" alt="">';
                }),
            Column::make('Aksi')
                ->format(function ($value, $column, $row) {
                    // echo $row;
                    return view('components.action-component', compact('row'));
                }),
        ];
    }

    public function query(): Builder
    {
        return Kandidat::query();
    }
}
