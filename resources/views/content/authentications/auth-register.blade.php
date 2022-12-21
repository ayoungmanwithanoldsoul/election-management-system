@php
    $route = Route::currentRouteName();
    if (str_contains($route, 'admin')) {
        $userType = 'admin';
        print 'yes';
    } else {
        $userType = 'voter';
    }
@endphp

@extends('layouts/blankLayout')

@section('title', 'Register {{ ucfirst($userType) }}')

@section('page-style')
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}">
@endsection

@section('style')
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }

    /* Firefox */
    input[type=number] {
    -moz-appearance: textfield;
    }
@endsection

@section('content')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">

                <!-- Register Card -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="{{ url('/') }}" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">@include('_partials.macros', ['width' => 25, 'withbg' => '#696cff'])</span>
                                <span
                                    class="app-brand-text demo text-body fw-bolder">{{ config('variables.templateName') }}</span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-2">Adventure starts here 🚀</h4>
                        <p class="mb-4">Make your app management easy and fun!</p>
                        @if ($userType === 'admin')
                            <h4 class="mb-2">Adventure starts here 🚀</h4>
                            <p class="mb-4">Make your election manageable and transparent to voters. Register an
                                {{ $userType }} account to start managing the
                                election</p>
                        @else
                            <h4 class="mb-2">Adventure starts here 🚀</h4>
                            <p class="mb-4">Make your voting hassle free and transparent. Register a {{ $userType }}
                                account to cast a vote</p>
                        @endif

                        <form id="formAuthentication" class="mb-3" action="{{ $route }}" method="GET">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">Firstname</label>
                                <input type="text" class="form-control" id="firstname" name="firstname"
                                    placeholder="Enter your Firstname" >
                            </div>
                            <div class="mb-3">
                              <label for="lastname" class="form-label">Lastname</label>
                              <input type="text" class="form-control" id="lastname" name="lastname"
                                  placeholder="Enter your Lastname" >
                            </div>
                            <div class="mb-3">
                              <label for="{{ $userType == 'admin' ? 'username' : 'idnumber' }}"
                                  class="form-label">{{ $userType == 'admin' ? 'Username' : 'I.D. Number' }}</label>
                              <input type="{{ $userType == 'admin' ? 'text' : 'number' }}" class="form-control"
                                  id="{{ $userType == 'admin' ? 'username' : 'idnumber' }}"
                                  name="{{ $userType == 'admin' ? 'username' : 'idnumber' }}"
                                  placeholder="{{ $userType == 'admin' ? 'Enter your username' : 'Enter your I.D. number' }}">
                            </div>
                            <div class="mb-3">
                              <label for="department" class="form-label">Department</label>
                              <select id="department" name="department" class="form-select" required>
                                  <option value="" selected disabled>Select Department</option>
                                  <option value="Elementary">Elementary Department</option>
                                  <option value="Junior">Junior High School Department</option>
                                  <option value="Senior">Senior High School Department</option>
                              </select>
                          </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter your email">
                            </div>
                            <div class="form-password-toggle mb-3">
                                <label class="form-label" for="password">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms">
                                    <label class="form-check-label" for="terms-conditions">
                                        I agree to
                                        <a href="javascript:void(0);">privacy policy & terms</a>
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-primary d-grid w-100">
                                Sign up
                            </button>
                        </form>

                        <p class="text-center">
                            <span>Already have an account?</span>
                            <a href="{{ route('') }}">
                                <span>Sign in instead</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Register Card -->
        </div>
    </div>
    </div>
@endsection
