@extends('layouts/contentLayoutMaster')

@section('title', 'Setting Waktu')

@section('content')
    <!-- Kick start -->
    <div class="card">
        <div class="card-header">
            <a href="{{ route('waktu.create') }}" class="btn btn-primary"><i data-feather="plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <livewire:waktu-table>
        </div>
    </div>
    <!--/ Kick start -->

@endsection
