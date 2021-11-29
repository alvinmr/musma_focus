@extends('layouts/contentLayoutMaster')

@section('title', 'Voting')

@section('content')
    @if (auth()->user()->votings->count() > 0)
        <h2 class="text-center mb-2 font-weight-bold">Terimakasih kamu sudah memilih kandidat</h2>
    @endif
    <div class="row row-cols-1 row-cols-md-3 mb-2 justify-content-center">
        @forelse ($kandidat as $kandidat_item)
            <div class="col">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('images/avatars/10.png') }}" alt="Card image cap" />
                    <div class="card-body text-center">
                        <h4 class="card-title">{{ $kandidat_item->nama }}</h4>
                        <div>
                            <h5>Visi</h5>
                            <p class="card-text">
                                {{ $kandidat_item->visi }}
                            </p>
                        </div>
                        <div class="mt-3">
                            <h5>Misi</h5>
                            <p class="card-text">
                                {{ $kandidat_item->misi }}
                            </p>
                        </div>
                    </div>
                    @if (auth()->user()->votings->count() == 0)
                        <div class="card-footer">
                            <form action="{{ route('voting.store', $kandidat_item->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-primary">Vote</a>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        @empty

            <div class="col">
                <h1 class="text-center">Masih belum ada data kandidat</h1>
                <img src="{{ asset('images/pages/error-dark.svg') }}" width="100%">
            </div>

        @endforelse

    </div>
@endsection
