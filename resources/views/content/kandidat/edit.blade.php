@extends('layouts/contentLayoutMaster')

@section('title', 'Edit Data Kandidat')

@section('content')
    <!-- Kick start -->
    <div class="card">
        <div class="card-body">
            <form action="{{ route('kandidat.update', $kandidat->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="nama" class="form-label">Nama</label>
                    <input value="{{ old('nama', $kandidat->nama) }}" name="nama" type="text"
                        class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama">
                    @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="angkatan" class="form-label">Angkatan</label>
                    <input value="{{ old('angkatan', $kandidat->angkatan) }}" name="angkatan" type="number"
                        class="form-control @error('angkatan') is-invalid @enderror" id="angkatan"
                        placeholder="Masukkan Angkatan">
                    @error('angkatan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="nim" class="form-label">NIM</label>
                    <input value="{{ old('nim', $kandidat->nim) }}" name="nim" type="text"
                        class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukkan NIM">
                    @error('nim')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-2 row">
                    <div class="col-6">
                        <label for="fakultas" class="form-label">Fakultas</label>
                        <input value="{{ old('fakultas', $kandidat->fakultas) }}" name="fakultas" type="text"
                            class="form-control @error('fakultas') is-invalid @enderror" id="fakultas"
                            placeholder="Masukkan fakultas">
                        @error('fakultas')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="prodi" class="form-label">Program Studi</label>
                        <input value="{{ old('prodi', $kandidat->prodi) }}" name="prodi" type="text"
                            class="form-control @error('prodi') is-invalid @enderror" id="prodi"
                            placeholder="Masukkan Program Studi">
                        @error('prodi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-2">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control char-textarea @error('deskripsi') is-invalid @enderror"
                        cols="30" rows="4"
                        placeholder="Masukkan deskripsi singkat calon">{{ old('deskripsi', $kandidat->deskripsi) }}</textarea>
                    @error('deskripsi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-2 row">
                    <div class="col-6">
                        <label for="visi" class="form-label">Visi</label>
                        <input value="{{ old('visi', $kandidat->visi) }}" name="visi" type="text"
                            class="form-control @error('visi') is-invalid @enderror" id="visi" placeholder="Masukkan visi">
                        @error('visi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="misi" class="form-label">Misi</label>
                        <input value="{{ old('misi', $kandidat->misi) }}" name="misi" type="text"
                            class="form-control @error('misi') is-invalid @enderror" id="misi" placeholder="Masukkan Misi">
                        @error('misi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div>
                    <img class="img-fluid" src="{{ asset($kandidat->foto) }}" alt="gambar ketua">
                </div>
                <div class="mb-2">
                    <label for="file" class="form-label">Upload Foto</label>
                    <input class="form-control @error('foto') is-invalid @enderror" type="file" name="foto" id="file">
                    @error('foto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </form>
        </div>
    </div>
    <!--/ Kick start -->
@endsection
