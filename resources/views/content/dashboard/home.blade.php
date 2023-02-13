@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection


@section('content')
<pre>{{ print_r($menuData) }}</pre>
    <div class="row">
        @if (session('success_message'))
            <div class="alert alert-success alert-dismissible w-100" role="alert">
                <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Error!!</h6>
                <p class="mb-0">{{ session('success_message') }}</p>
                <p class="mb-0"><a href="{{ route('auth-logout') }}">Logout</a></p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif
        @if (session('logged'))
            <div class="alert alert-success alert-dismissible w-100" role="alert">
                <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Success!!</h6>
                <p class="mb-0">Currently Logged In |{{ ucfirst(session('user')) }}|</p>
                <p class="mb-0"><a href="{{ route('auth-logout') }}">Logout</a></p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif
    </div>
@endsection
