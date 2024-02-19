<!doctype html>
<html lang="en">
    <head>
        <title>Senta'a – Register</title>
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
                                        <h3 class="mb-4">{{ __('Sign Up') }}</h3>
                                    </div>
                                    <div class="w-100">
                                    <h3 class="mb-4">
                                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                    </h3>
                                    </div>
                                    <div class="w-100">
                                        <p class="social-media d-flex justify-content-end">
                                            <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                            <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                        </p>
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('register') }}" class="signin-form">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label class="label" for="name">{{ __('Name') }}</label>
                                        <input id="name" type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="name">{{ __('Email') }}</label>
                                        <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="password">{{ __('Password') }}</label>
                                        <input type="password" class="form-control" id="password" placeholder="Password" type="password"
                                    name="password"
                                    autocomplete="current-password" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="password">{{ __('Confirm password') }}</label>
                                        <input type="password" class="form-control" id="password_confirmation" placeholder="Password" type="password"
                                    name="password_confirmation" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">{{ __('Register') }}</button>
                                    </div>
                                </form>
                                <p class="text-center">Already a member? <a href="{{ route('login') }}"> 
                                    {{ __('Sign In') }}
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

