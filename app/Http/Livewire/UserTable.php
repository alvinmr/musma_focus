<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;

class UserTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('NIM', 'nim')
                ->searchable()
                ->sortable(),
            Column::make('Nama Lengkap', 'name')
                ->searchable(),
            Column::make('Fakultas', 'fakultas'),
            Column::make('Program Studi', 'prodi')
        ];
    }

    public function query(): Builder
    {
        return User::query()->doesntHave('roles');
    }
}