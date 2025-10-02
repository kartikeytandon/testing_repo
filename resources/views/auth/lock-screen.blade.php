@extends('layouts.auth', ['title' => 'Lock Screen'])

@section('content')

<div class="col-xl-12">
    <div class="card auth-card">
        <div class="card-body p-0">
            <div class="row align-items-center g-0">
                <div class="col-lg-6 d-none d-lg-inline-block border-end">
                    <div class="auth-page-sidebar">
                        <img src="/images/sign-in.svg" alt="auth" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4">
                        <div class="mx-auto mb-4 text-center auth-logo">
                            <a href="{{ route('any', 'home')}}" class="logo-dark">
                                <img src="/images/logo-sm.png" height="30" class="me-1" alt="logo sm">
                                <img src="/images/logo-dark.png" height="24" alt="logo dark">
                            </a>

                            <a href="{{ route('any', 'home')}}" class="logo-light">
                                <img src="/images/logo-sm.png" height="30" class="me-1" alt="logo sm">
                                <img src="/images/logo-light.png" height="24" alt="logo light">
                            </a>
                        </div>
                        <h2 class="fw-bold text-center fs-18">Hi ! Gaston</h2>
                        <p class="text-muted text-center mt-1 mb-4">Enter your password to access the admin.</p>

                        <div class="row justify-content-center">
                            <div class="col-12 col-md-8">
                                <form action="{{ route('any', 'home')}}" class="authentication-form">
                                    <div class="mb-3">
                                        <label class="form-label visually-hidden" for="example-password">Password</label>
                                        <input type="password" id="example-password" class="form-control" placeholder="Enter your password">
                                    </div>
                                    <div class="mb-1 text-center d-grid">
                                        <button class="btn btn-primary" type="submit">Sign In</button>
                                    </div>
                                </form>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- end card-body -->
    </div> <!-- end card -->

    <p class="text-white mb-0 text-center">Not you? return <a href="{{ route('second', ['auth', 'login'])}}" class="text-white fw-bold ms-1">Sign In</a></p>
</div> <!-- end col -->

@endsection