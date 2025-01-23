<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets-login/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets-login/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets-login/css/bootstrap.min.css') }}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('assets-login/css/style.css') }}">

    <title>Login Admin</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('{{ asset('assets-login/images/bg_11.jpg') }} "></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Login to <br> <strong>Manajemen Pengetahuan</strong></h3><br>
            {{-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> --}}
            <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                @csrf
              <div class="form-group first">
                <label for="username">Email</label>
                <input placeholder="Masukkan alamat email" id="email" type="email"
                       class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                       required autocomplete="email" autofocus>
                <span class="focus-input100" data-symbol="&#xf206;"></span>
                @error('email')
                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                @enderror
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input id="password" type="password" class="input100 @error('password') is-invalid @enderror"
                       name="password" required autocomplete="current-password" placeholder="Masukkan password">
                <span class="focus-input100" data-symbol="&#xf190;"></span>
                @error('password')
                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                @enderror
              </div>
              
              
              {{-- <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div> --}}

              <input type="submit" value="Log In" class="btn btn-block btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="{{ asset('assets-login/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets-login/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets-login/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-login/js/main.js') }}"></script>
  </body>
</html>