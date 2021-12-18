@extends('layouts/fullLayoutMaster')

@section('title', 'Coming Soon')

@section('content')

    <div class="card-congratulations" style="height: 100vh;">
        <div class="text-center card-body">
            <img src="{{ asset('images/elements/decore-left.png') }}" class="congratulations-img-left"
                alt="card-img-left" />
            <img src="{{ asset('images/elements/decore-right.png') }}" class="congratulations-img-right"
                alt="card-img-right" />
            <div class="shadow avatar avatar-xl bg-primary">
                <div class="avatar-content">
                    <i data-feather="cloud-lightning" class="font-large-1"></i>
                </div>
            </div>
            <div class="text-center">
                <h1 class="mt-2 mb-2 text-white" style="font-size: 50px; font-weight: bold;">TELAH SELESAI</h1>
                <h3 class="mb-2 text-white">Pemilihan Calon Ketua UKM Udayana Focus 2022</h3>
                <h3 class="mb-2 text-white">TELAH SELESAI </h3>
                <div id="demo" class="text-black countdown d-flex justify-content-center">
                    <div>
                        <h3>%d </h3>
                        <h4>Hari</h4>
                    </div>
                    <div>
                        <h3>%h </h3>
                        <h4>Jam</h4>
                    </div>
                    <div>
                        <h3>%m </h3>
                        <h4>Menit</h4>
                    </div>
                    <div>
                        <h3>%s </h3>
                        <h4>Detik</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Variable to display output timer
        const output = document.getElementById("demo").innerHTML;

        // Set the date we're counting down to
        var countDownDate = new Date("{{ $waktu->waktu_mulai }}").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("demo").innerHTML = output.replace('%d', days).replace('%h', hours).replace(
                '%m', minutes).replace('%s', seconds);

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "Sudah Selesai";
            }
        }, 1000);
    </script>

@endsection
