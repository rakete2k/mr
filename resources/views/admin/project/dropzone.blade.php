@extends('admin.master')

@section('content')
    <meta name="base_url" content="{{ URL::to('/') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Dropzone -->
    <link rel="stylesheet" href="{{ asset('dropzone/individual/upload/css/rawstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('dropzone/individual/upload/css/imagehover.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dropzone/individual/upload/css/base.css') }}" />
    <link rel="stylesheet" href="{{ asset('dropzone/individual/upload/css/style.css') }}" />

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="container-fluid" >
        {{ csrf_field() }}
        <div class="upload-drop-zone" id="drop-zone">

            <div id="dropzon-info-text">Bilder per drag & drop einfügen</div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
    <!-- Modernizr JS -->
    <script src="{{ asset('dropzone/modernizr.js') }}"></script>
    <!-- Dropzone JS -->
    <script src="{{ asset('dropzone/dist/min/dropzone.min.js') }}"></script>
    <!-- Individual Dropzone JS  -->
    <script src="{{ asset('dropzone/individual/upload/js/mydropzone.js') }}"></script>
@endsection