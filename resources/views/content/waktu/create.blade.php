@extends('layouts/contentLayoutMaster')

@section('title', 'Setting Waktu')

@section('content')
    <!-- Kick start -->
    <div class="card">
        <div class="card-body">
            <form action="{{ route('waktu.store') }}" method="post" enctype="multipart/form-data"
                id="my-awesome-dropzone">
                @csrf
                <div class="mb-3 row">
                    <div class="col-6">
                        <label for="waktu_mulai" class="form-label">Waktu Mulai</label>
                        <input value="{{ old('waktu_mulai') }}" name="waktu_mulai" type="datetime-local"
                            class="form-control @error('waktu_mulai') is-invalid @enderror" id="waktu_mulai">
                        @error('waktu_mulai')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="waktu_selesai" class="form-label">Waktu Selesai</label>
                        <input value="{{ old('waktu_selesai') }}" name="waktu_selesai" type="datetime-local"
                            class="form-control @error('waktu_selesai') is-invalid @enderror" id="waktu_selesai"
                            placeholder="Masukkan waktu_selesai">
                        @error('waktu_selesai')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </form>
        </div>
    </div>
    <!--/ Kick start -->
@endsection
