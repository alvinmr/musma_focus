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

    <div class="justify-content-center row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <p>Hasil Pemilihan</p>
                </div>
                <div class="card-body">
                    <canvas id="myChart" class="chartjs" data-height="200"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['{!! implode("', '", $nama_kandidat) !!}'],
                datasets: [{
                    label: "Hasil Pemilihan",
                    data: [{!! implode(',', $total_pemilih) !!}],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
