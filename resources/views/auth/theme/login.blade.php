@extends('layouts.auth')

@section('content')

    <div class="authentication-wrapper authentication-cover">
        <div class="authentication-inner row m-0">
            <!-- /Left Text -->
            <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center p-5">
                <div class="w-100 d-flex justify-content-center">
                    <img src="../../assets/img/logo/logo.jpg" class="img-fluid"
                         alt="Login image" width="400" data-app-dark-img="illustrations/boy-with-rocket-dark.png"
                         data-app-light-img="illustrations/boy-with-rocket-light.html">
                </div>
            </div>
            <!-- /Left Text -->
            <!-- Login -->
            <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
                <div class="w-px-400 mx-auto">
                    <!-- Logo -->
                    <div class="d-flex
                                flex-column
                                bd-highlight
                                mb-5
                                flex-wrap
                                align-content-center">
                        <a href="#" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
                                <img width="100" src="../../assets/img/logo/logo2.jpg" alt="">
                            </span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-2">Welcome to CDB! 👋</h4>
                    <p class="mb-4">Please sign-in to your account and start the adventure</p>
                    <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                                <label for="email" class="form-label">Username</label>
                            </div>

                            <input type="text" class="form-control" id="username" name="username"
                                   value="admin" placeholder="Enter your username" autofocus>
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Password</label>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password" value="123456"
                                       placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                       aria-describedby="password"/>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="input-group-text cursor-pointer">
                                <i class="bx bx-hide"></i>
                              </span>
                            </div>
                        </div>

                        <button class="btn btn-primary d-grid w-100">
                            Sign in
                        </button>
                    </form>

                </div>
            </div>
            <!-- /Login -->
        </div>
    </div>

@endsection
