@extends('layouts/contentLayoutMaster')

@section('title', 'Home')

@section('content')
    <!-- Kick start -->
    <div class="card card-congratulations">
        <div class="text-center card-body">
            <img src="{{ asset('images/elements/decore-left.png') }}" class="congratulations-img-left"
                alt="card-img-left" />
            <img src="{{ asset('images/elements/decore-right.png') }}" class="congratulations-img-right"
                alt="card-img-right" />
            <div class="shadow avatar avatar-xl bg-primary">
                <div class="avatar-content">
                    <i data-feather="award" class="font-large-1"></i>
                </div>
            </div>
            <div class="text-center">
                <h1 class="mb-1 text-white">Selamat datang bro {{ auth()->user()->name }}</h1>
                <p class="m-auto card-text w-75">
                    Here u should do today : <br>
                    <strong>{{ $activity['activity'] }}</strong>
                </p>
            </div>
        </div>
    </div>
    <!--/ Kick start -->

    <!-- Page layout -->
    <div class="row">
        <div class="col-lg-4 col-sm-4 col-12">
            <div class="card">
                <div class="card-header flex-column align-items-middle">
                    <div class="m-0 avatar bg-light-warning p-50">
                        <div class="avatar-content">
                            <i data-feather="users" class="font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="mt-1 fw-bolder">{{ $pemilih }}</h2>
                    <p class="card-text">Pemilih</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-12">
            <div class="card">
                <div class="card-header flex-column align-items-middle">
                    <div class="m-0 avatar bg-light-success p-50">
                        <div class="avatar-content">
                            <i data-feather="user" class="font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="mt-1 fw-bolder">{{ $kandidat }}</h2>
                    <p class="card-text">Kandidat</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-12">
            <div class="card">
                <div class="card-header flex-column align-items-middle">
                    <div class="m-0 avatar bg-light-success p-50">
                        <div class="avatar-content">
                            <i data-feather="user" class="font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="mt-1 fw-bolder">{{ $suara_masuk }} dari {{ $pemilih }}</h2>
                    <p class="card-text">Suara Masuk</p>
                </div>
            </div>
        </div>
    </div>
    <!--/ Page layout -->
@endsection
