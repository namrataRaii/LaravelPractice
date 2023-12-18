<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/pages/examples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Dec 2023 12:39:01 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Registration Page</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="{{url('assets/plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="{{url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{url('assets/css/adminlte.min2167.css?v=3.2.0')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    
</head>

<body class="hold-transition register-page">
@if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('registration'))
                            <a href="{{ route('registration') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>
                <form action="{{url('/registration')}}" method="post">
                    @csrf
                 
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Full name" value="{{old('name ')}}">
                        
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">
                            @error('name')
                            {{$message}}
                            @enderror
                        </span>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                    </span>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">
                     @error('password')
                     {{$message}}
                     @enderror
                    </span>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="confirm_password" placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">
                        @error('confirm_password')
                        {{$message}}
                        @enderror
                    </span>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>

                    </div>
                </form>
                
                <a href="{{Route('login')}}" class="text-center">I already have a membership</a>
            </div>

        </div>
    </div>


    <script src="{{url('assets/plugins/jquery/jquery.min.js')}}"></script>

    <script src="{{url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{url('assets/js/adminlte.min2167.js?v=3.2.0')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
    @if(Session::has('success'))
        toastr.success('{{ Session::get('success') }}', 'Success');
    @endif

    @if(Session::has('error'))
        toastr.error('{{ Session::get('error') }}', 'Error');
    @endif
</script>
</body>

<!-- Mirrored from adminlte.io/themes/v3/pages/examples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Dec 2023 12:39:01 GMT -->

</html>