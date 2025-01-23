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
    <div class="bg order-1 order-md-2" style="background-image: url('{{ asset('assets-login/images/alun.jpg') }} "></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3><strong>Login to</strong><br> <strong>Manajemen Pengetahuan</strong></h3><br>
            {{-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> --}}
            <form method="POST" action="{{ route('login.action') }}" class="user">
            @csrf
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                   @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
              </div>
              @endif
              <div class="form-group">
                <label>Email</label>
                <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address...">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
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