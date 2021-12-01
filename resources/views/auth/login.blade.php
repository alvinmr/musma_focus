@php
$configData = Helper::applClasses();
@endphp
@extends('layouts/fullLayoutMaster')

@section('title', 'Masuk')

@section('page-style')
    {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/pages/authentication.css')) }}">
@endsection

@section('content')
    <div class="auth-wrapper auth-cover">
        <div class="m-0 auth-inner row">
            <!-- Brand logo-->

            <a class="brand-logo align-items-center" href="#">
                <img src="{{ asset('images/logo/musma.png') }}" width="5%">
                {{-- <h2 class="brand-text text-primary ms-1">Musma Focus</h2> --}}
            </a>
            <!-- /Brand logo-->

            <!-- Left Text-->
            <div class="p-5 d-none d-lg-flex col-lg-8 align-items-center">
                <div class="px-5 w-100 d-lg-flex align-items-center justify-content-center">
                    @if ($configData['theme'] === 'dark')
                        <img class="img-fluid" src="{{ asset('images/pages/login-v2-dark.svg') }}" alt="Login V2" />
                    @else
                        <img class="img-fluid" src="{{ asset('images/pages/login-v2.svg') }}" alt="Login V2" />
                    @endif
                </div>
            </div>
            <!-- /Left Text-->

            <!-- Login-->
            <div class="px-2 d-flex col-lg-4 align-items-center auth-bg p-lg-5">
                <div class="mx-auto col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2">
                    <h2 class="mb-1 card-title fw-bold">Selamat Datang di Website Musma Focus! 👋</h2>
                    <p class="mb-2 card-text">Silahkan masuk ke akun kamu terlebih dahulu</p>
                    <form class="mt-2 auth-login-form" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-1">
                            <label class="form-label" for="email">NIM</label>
                            <input class="form-control @error('nim') is-invalid @enderror" id="nim" type="text" name="nim"
                                placeholder="Masukkan NIM kamu" aria-describedby="nim" autofocus="" tabindex="1"
                                value="{{ old('nim') }}" />
                            @error('nim')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <div class="input-group input-group-merge form-password-toggle">
                                <input class="form-control form-control-merge @error('password') is-invalid @enderror"
                                    id="password" type="password" name="password" placeholder="············"
                                    aria-describedby="password" tabindex="2" />
                                <span class="cursor-pointer input-group-text"><i data-feather="eye"></i></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-1">
                            <div class="form-check">
                                <input class="form-check-input" id="remember-me" type="checkbox" tabindex="3" />
                                <label class="form-check-label" for="remember-me"> Ingat saya</label>
                            </div>
                        </div>
                        <button class="btn btn-primary w-100" tabindex="4">Masuk</button>
                    </form>
                </div>
            </div>
            <!-- /Login-->
        </div>
    </div>
@endsection
