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
            Column::make('NIM', 'nim'),
            Column::make('Nama Lengkap', 'name'),
            Column::make('Fakultas', 'fakultas'),
            Column::make('Program Studi', 'prodi'),
            Column::make('Email', 'email'),
        ];
    }

    public function query(): Builder
    {
        return User::query()->doesntHave('roles');
    }
}