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
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(session()->has('LoginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('LoginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <main class="form-signin">
                    {{--                    <h1 class="h3 mb-3 fw-normal text-center">Register</h1>--}}
                    <form action="/login" method="post">
                        @csrf
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                   id="email" value="{{ old('email') }}" autofocus>
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


                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                        <small class="d-block text-center"> Not Registered? <a href="/register">Register Now!</a></small>
                    </form>
                </main>
            </div>
        </div>
    </main>
@endsection
