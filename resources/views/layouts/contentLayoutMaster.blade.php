@isset($pageConfigs)
    {!! Helper::updatePageConfig($pageConfigs) !!}
@endisset

<!DOCTYPE html>
@php
$configData = Helper::applClasses();
@endphp

<html class="loading {{ $configData['theme'] === 'light' ? '' : $configData['layoutTheme'] }}"
    data-textdirection="{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}" @if ($configData['theme'] === 'dark') data-layout="dark-layout" @endif>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Musyawarah Mahasiswa Udayana Focus merupakan kegiatan tahunan yang diselenggarakan oleh Unit Kegiatan Mahasiswa Udayana Focus Universitas Udayana dengan tujuan memilih dan membentuk kepengurusan UKM Udayana Focus untuk mencapai kemajuan organisasi. Kegiatan ini merupakan wadah pengambilan keputusan dalam suatu badan organisasi, di mana diharapkan anggota UKM Udayana Focus dapat menyalurkan aspirasinya melalui kegiatan ini.
    Adapun agenda yang">
    <meta name="author" content="MUSMA">
    <title>@yield('title') - Musma Focus</title>
    <link rel="apple-touch-icon" href="{{ asset('musma.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('musma.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">
    @livewireStyles

    {{-- Include core + vendor Styles --}}
    @include('panels/styles')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
@isset($configData['mainLayoutType'])
    @extends((( $configData["mainLayoutType"] === 'horizontal') ? 'layouts.horizontalLayoutMaster' :
    'layouts.verticalLayoutMaster' ))
@endisset
