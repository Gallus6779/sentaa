<!doctype html>
<html lang="en">
    <head>
        <title>Senta'a – Reset your password</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="{{ asset('login-style/css/style.css') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.ico') }}">
    
	</head>
	
    <body>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-10">
                        <div class="wrap d-md-flex">
                            <div class="img" style="background-image: url(images/bg-1.jpg);">
                            </div>
                            <div class="login-wrap p-4 p-md-5">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <h3 class="mb-4">Reset your password</h3>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="w-100">
                                        <p class="social-media d-flex justify-content-end">
                                            {{ __('Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                                        </p>
                                        <p>
                                             <!-- Session Status -->
                                            <x-auth-session-status class="mb-4" :status="session('status')" />

                                            <!-- Validation Errors -->
                                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                        </p>
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('password.email') }}" class="signin-form">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label class="label" for="name">{{ __('Email') }}</label>
                                        <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">
                                            {{ __('Email Password Reset Link') }}
                                        </button>
                                    </div>
                                </form>
                                <p class="text-center">Not a member? <a href="{{ route('register') }}"> 
                                    {{ __('Sign Up') }}
                                </a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="{{ asset('login-style/js/jquery.min.js') }}"></script>
        <script src="{{ asset('login-style/js/popper.js') }}"></script>
        <script src="{{ asset('login-style/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('login-style/js/main.js') }}"></script>

	</body>
</html>

