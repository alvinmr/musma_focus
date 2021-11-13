@extends('layouts/contentLayoutMaster')

@section('title', 'Data Kandidat')

@section('content')
    <!-- Kick start -->
    <div class="card">
        <div class="card-header">
            <a href="{{ route('kandidat.store') }}" class="btn btn-primary"><i data-feather="plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <livewire:kandidat-table>
        </div>
    </div>
    <!--/ Kick start -->

@endsection
