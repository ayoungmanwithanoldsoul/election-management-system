@php
    $route = Route::currentRouteName();
    if (str_contains($route, 'admin')) {
        $userType = 'admin';
    } else {
        $userType = 'voter';
    }
@endphp

@extends('layouts/blankLayout')

@section('title', 'Register {{ ucfirst($userType) }}')

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

@section('page-script')
    <script>
        function assessDept() {
            var department = document.getElementById('department').value;
            var level = document.getElementById('level');
            var elementary = ["One", "Two", "Three", "Four", "Five", "Six"];
            var junior = ["Seven", "Eight", "Nine", "Ten"];
            var senior = ["Eleven", "Twelve"];
            var child = level.lastElementChild;
            var x = level.options.length;
            while (child) {
                if (x === 1) {
                    break;
                }
                level.removeChild(child);
                child = level.lastElementChild;
                x--;
            }

            if (department == "Elementary") {
                for (const val of elementary) {
                    var option = document.createElement("option");
                    option.value = val;
                    option.text = val;
                    level.appendChild(option);
                }
            } else if (department == "Junior") {
                for (const val of junior) {
                    var option = document.createElement("option");
                    option.value = val;
                    option.text = val;
                    level.appendChild(option);
                }
            } else if (department == "Senior") {
                for (const val of senior) {
                    var option = document.createElement("option");
                    option.value = val;
                    option.text = val;
                    level.appendChild(option);
                }
            }


        }

        function assessPassword() {
            var pass = document.getElementById('password');
            var confirmation = document.getElementById('confirmation');
            var message = document.getElementById('message');
            if (pass.value != confirmation.value) {
                pass.style = "border:3px solid red";
                confirmation.style = "border:3px solid red";
                message.innerHTML = "Passwords do not match!";
            } else {
                message.innerHTML = "";
                confirmation.style = "border:3px solid green";
                pass.style = "border:3px solid green";
            }
        }

        function noString(str) {
            return /^[0-9]+$/.test(str);
        }

        function assessId() {
            var idObj = document.getElementById('number');
            var idStr = idObj.value;
            if (!noString(idStr)) {
                idObj.style = "border:3px solid red";
            } else {
                idObj.style = "border:3px solid green";
            }
        }
    </script>
@endsection


@section('content')
    <pre>{{ print $route }}</pre>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                @if (session('visited') != null)
                    <div class="alert alert-danger alert-dismissible w-100" role="alert">
                        <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Error!!</h6>
                        <p class="mb-0">{{ session('visited') }}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif
                @if (session('logged'))
                    <div class="alert alert-success alert-dismissible w-100" role="alert">
                        <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Error!!</h6>
                        <p class="mb-0">Logged In Successful</p>
                        <p class="mb-0"><a href="{{route('auth-logout')}}">Logout</a></p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif
                @if (session('error_message') != null)
                    <div class="position-absolute alert alert-danger alert-dismissible w-100" style="z-index: 5; top:40%"
                        role="alert">
                        <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">Error!!</h6>
                        <p class="mb-0">{{ session('error_message') }}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif

                <!-- Register  -->
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
                            <h4 class="mb-2">Adventure starts here 🚀</h4>
                            <p class="mb-4">Make your election manageable and transparent to voters. Register an
                                {{ $userType }} account to start managing the
                                election.</p>
                        @else
                            <h4 class="mb-2">Adventure starts here 🚀</h4>
                            <p class="mb-4">Make your voting hassle free and transparent. Register a
                                {{ $userType }}
                                account to cast a vote.</p>
                        @endif

                        <form id="formAuthentication" class="mb-3" action="{{ route($route) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-outline col-6 mb-3">
                                    <label for="firstname" class="form-label">Firstname</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname"
                                        placeholder="Enter Firstname" autofocus>
                                </div>

                                <div class="form-outline col-6 mb-3">
                                    <label for="lastname" class="form-label">Lastname</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname"
                                        placeholder="Enter Lastname">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-outline col-12 mb-3">
                                    <label for="{{ $userType == 'admin' ? 'username' : 'idnumber' }}"
                                        class="form-label">{{ $userType == 'admin' ? 'Username' : 'I.D. Number' }}</label>
                                    <input type="{{ $userType == 'admin' ? 'text' : 'number' }}" class="form-control"
                                        id="{{ $userType == 'admin' ? 'username' : 'idnumber' }}"
                                        name="{{ $userType == 'admin' ? 'username' : 'idnumber' }}"
                                        placeholder="{{ $userType == 'admin' ? 'Enter your username' : 'Enter your I.D. number' }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-outline col-12 mb-3">
                                    <label for="department" class="form-label">Department</label>
                                    <select id="department" name="department" class="form-select" required
                                        onchange="{{ $userType == 'voter' ? 'assessDept();' : '' }}">
                                        <option value="" selected disabled>Select Department</option>
                                        <option value="Elementary">Elementary Department</option>
                                        <option value="Junior">Junior High School Department</option>
                                        <option value="Senior">Senior High School Department</option>
                                    </select>
                                </div>
                            </div>

                            @if ($userType == 'voter')
                                <div class="row">
                                    <div class="form-outline col-6 mb-3">
                                        <label for="level" class="form-label">Level</label>
                                        <select name="level" id="level" class="form-select">
                                            <option value="" disabled selected>Select Level</option>
                                        </select>
                                    </div>

                                    <div class="form-outline col-6 mb-3">
                                        <label for="section" class="form-label">Section</label>
                                        <input type="text" id="section" name="section" class="form-control"
                                            placeholder="Enter Section" />
                                    </div>
                                </div>
                            @endif

                            @if ($userType == 'admin')
                                <div class="mb-3">
                                    <label for="authkey" class="form-label">Authentication Key</label>
                                    <input type="text" class="form-control" id="authkey" name="authkey"
                                        placeholder="Enter the authentication key">
                                </div>
                            @endif

                            <div class="row">
                                <div class="form-outline form-password-toggle col-6 mb-3">
                                    <label class="form-label" for="password">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control" name="password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password" />
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                </div>

                                <div class="form-outline form-password-toggle col-6 mb-3">
                                    <label class="form-label" for="confirmation">Re-enter Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="confirmation" class="form-control"
                                            name="confirmation"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password" />
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="terms-conditions"
                                            name="terms">
                                        <label class="form-check-label" for="terms-conditions">
                                            I agree to
                                            <a href="javascript:void(0);">privacy policy & terms</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary d-grid w-100">
                                Sign up
                            </button>
                        </form>

                        <p class="text-center">
                            <span>Already have an account?</span>
                            <a href="{{ $userType == 'admin' ? route('admin-auth-login') : route('voter-auth-login') }}">
                                <span>Sign in instead</span>
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
                        </p>
                    </div>
                </div>
            </div>
            <!-- Register Card -->
        </div>
    </div>
    </div>
@endsection
