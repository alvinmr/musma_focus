@extends('layouts/contentLayoutMaster')

@section('title', 'Voting')

@section('content')
    @if (auth()->user()->votings->count() > 0)
        <h2 class="mb-2 text-center font-weight-bold">Terimakasih, kamu sudah memilih kandidat</h2>
    @else
        <div class="mb-2 row row-cols-1 row-cols-md-3 justify-content-center">
            @forelse ($kandidat as $kandidat_item)
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ asset($kandidat_item->foto) }}" alt="Card image cap" />
                        <div class="text-center card-body">
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
                            <div class="card-footer justify-content-center d-flex">
                                {{-- <form action="{{ route('voting.store', $kandidat_item->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-primary">Vote</a>
                            </form> --}}
                                <button class="btn btn-primary " id="btn-vote{{ $kandidat_item->id }}">Vote</button>

                                <script>
                                    document.getElementById('btn-vote{{ $kandidat_item->id }}').addEventListener('click', function() {

                                        Swal.fire({
                                            title: 'Apakah kamu yakin memilih kandidat ini?',
                                            text: "Jika kamu menekan yakin, maka kamu tidak bisa mengembalikan aksi ini",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonText: 'Ya, yakin',
                                            cancelButtonText: 'Batal'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                fetch('https://musmafocus2022.my.id/voting/{{ $kandidat_item->id }}', {
                                                        method: 'POST'
                                                    })
                                                    .then(response => response.json())
                                                    .then(data => console.log(data));
                                                Swal.fire({
                                                    title: 'Terpilih!',
                                                    text: '.',
                                                    icon: 'success',
                                                    confirmButtonText: 'Okay'
                                                }).then((result) => {
                                                    window.location.href = "{{ route('home') }}";
                                                })
                                            }
                                        })
                                    })
                                </script>
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
    @endif
@endsection

@section('page-script')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
