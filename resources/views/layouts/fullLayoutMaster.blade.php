@isset($pageConfigs)
    {!! Helper::updatePageConfig($pageConfigs) !!}
@endisset

<!DOCTYPE html>
@php $configData = Helper::applClasses(); @endphp

<html class="loading {{ $configData['theme'] === 'light' ? '' : $configData['layoutTheme'] }}"
    lang="@if (session()->has('locale')){{ session()->get('locale') }}@else{{ $configData['defaultLanguage'] }}@endif" data-textdirection="{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}"
    @if ($configData['theme'] === 'dark') data-layout="dark-layout"@endif>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="Musyawarah Mahasiswa Udayana Focus merupakan kegiatan tahunan yang diselenggarakan oleh Unit Kegiatan Mahasiswa Udayana Focus Universitas Udayana dengan tujuan memilih dan membentuk kepengurusan UKM Udayana Focus untuk mencapai kemajuan organisasi. Kegiatan ini merupakan wadah pengambilan keputusan dalam suatu badan organisasi, di mana diharapkan anggota UKM Udayana Focus dapat menyalurkan aspirasinya melalui kegiatan ini.
        Adapun agenda yang">
    <meta name="author" content="MUSMA">
    <title>@yield('title') - Musma Focus</title>
    <link rel="apple-touch-icon" href="{{ asset('musma.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('musma.png') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    {{-- Include core + vendor Styles --}}
    @include('panels/styles')

    {{-- Include core + vendor Styles --}}
    @include('panels/styles')

    {{-- Data AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Bootsrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>



<body
    class="vertical-layout vertical-menu-modern {{ $configData['bodyClass'] }} {{ $configData['theme'] === 'dark' ? 'dark-layout' : '' }} {{ $configData['blankPageClass'] }} blank-page"
    data-menu="vertical-menu-modern" data-col="blank-page" data-framework="laravel"
    data-asset-path="{{ asset('/') }}">

    <!-- BEGIN: Content-->
    <div class="app-content content {{ $configData['pageClass'] }}">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>

        <div class="content-wrapper">
            <div class="content-body">

                {{-- Include Startkit Content --}}
                @yield('content')

            </div>
        </div>
    </div>
    <!-- End: Content-->

    {{-- include default scripts --}}
    @include('panels/scripts')

    <script type="text/javascript">
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

    {{-- Data AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

</body>

</html>
