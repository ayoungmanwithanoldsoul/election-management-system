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

@section('title', 'Login {{ ucfirst($userType) }}')

@section('page-style')
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}">
    <style>
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
    </style>
@endsection

@section('content')
    <pre>{{ print $route }}</pre>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Log In -->
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

                        @if ($userType === 'admin')
                            <h4 class="mb-2">Welcome to {{ config('variables.templateName') }}! 👋</h4>
                            <p class="mb-4">Please sign-in to your {{ $userType }} account to start managing the
                                election</p>
                        @else
                            <h4 class="mb-2">Welcome to {{ config('variables.templateName') }}! 👋</h4>
                            <p class="mb-4">Please sign-in to your {{ $userType }} account to cast a vote</p>
                        @endif

                        <form id="formAuthentication" class="mb-3" action="" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="{{ $userType == 'admin' ? 'username' : 'idnumber' }}"
                                    class="form-label">{{ $userType == 'admin' ? 'Username' : 'I.D. Number' }}</label>
                                <input type="{{ $userType == 'admin' ? 'text' : 'number' }}" class="form-control"
                                    id="{{ $userType == 'admin' ? 'username' : 'idnumber' }}"
                                    name="{{ $userType == 'admin' ? 'username' : 'idnumber' }}"
                                    placeholder="{{ $userType == 'admin' ? 'Enter your username' : 'Enter your I.D. number' }}"
                                    autofocus>
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

                            <div class="form-password-toggle mb-3">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                    <a href="{{ url('auth/forgot-password-basic') }}">
                                        <small>Forgot Password?</small>
                                    </a>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                            </div>
                        </form>

                        <p class="text-center">
                            <span>New on our platform?</span>
                            <a
                                href="{{ $userType == 'admin' ? route('admin-auth-register') : route('voter-auth-register') }}">
                                <span>Create an account</span>
                            </a>
                        </p>


                        <div class="divider my-2">
                            <div class="divider-text">or</div>
                        </div>

                        <p class="text-center">
                            @if ($userType == 'admin')
                                <span>You're a voter?</span>
                                <a href="{{ route('voter-auth-login') }}">
                                    <span>Sign in</span>
                                </a>
                                <span>|</span>
                                <a href="{{ route('voter-auth-register') }}">
                                    <span>Register</span>
                                </a>
                                <span>as a voter</span>
                            @else
                                <span>You're an adiministrator?</span>
                                <a href="{{ route('admin-auth-login') }}">
                                    <span>Sign in</span>
                                </a>
                                <span>|</span>
                                <a href="{{ route('admin-auth-register') }}">
                                    <span>Register</span>
                                </a>
                                <span>as an administrator</span>
                            @endif
                    </div>
                </div>
            </div>
            <!-- Log In -->
        </div>
    </div>
    </div>
@endsection
