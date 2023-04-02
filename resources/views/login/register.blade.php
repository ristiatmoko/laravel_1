@extends('layouts.main')

@section('contents')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
             style="background-image: url({{ asset('../img/breadcrumbs-bg.jpg') }});">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>{{ $title }}</h2>
{{--                <ol>--}}
{{--                    <li><a href="index.html"></a></li>--}}
{{--                    <li>{{ $title }}</li>--}}
{{--                </ol>--}}

            </div>
        </div><!-- End Breadcrumbs -->

        <div class="row justify-content-center mt-3 mb-3">
            <div class="col-md-4">
                <main class="form-signin">
{{--                    <h1 class="h3 mb-3 fw-normal text-center">Register</h1>--}}
                    <form action="/register" method="post">
                        @csrf


                        <div class="form-floating">
                            <input type="text" name="name" class="form-control @error('name')is-invalid @enderror"
                                id="name" value="{{ old('name') }}">
                            <label for="name">Name</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                                id="username" value="{{ old('username') }}">
                            <label for="username">Username</label>
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" value="{{ old('password') }}">
                            <label for="password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password_confirmation"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                id="password_confirmation" value="{{ old('password_confirmation') }}">
                            <label for="password_confirmation">password_confirmation</label>
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                        <small class="d-block text-center">Already have account? <a href="{{ route('login.view') }}">Please Login!</a></small>
                    </form>
                </main>
            </div>
        </div>
    </main>
@endsection
