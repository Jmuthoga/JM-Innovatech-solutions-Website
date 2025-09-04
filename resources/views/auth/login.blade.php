@extends('layouts.master_home')
@section('home_content')

<body class="bg-light-gray" id="body">
  <div class="container d-flex flex-column justify-content-between vh-100" >
    <div class="row justify-content-center mt-5">
      <div class="col-xl-5 col-lg-6 col-md-10">
        <div class="card" style=" margin: 170px auto 170px;">

          @if(Session::has('message'))
          <div class="alert alert-success">
            {{Session::get('message')}}
          </div>

          @endif
          <div class="card-header bg-primary" >
            <div class="app-brand" >
              <a href="" style="text-decoration: none; display: flex; flex-direction: column; align-items: center;">
                <!--<img src="{{ asset('assets/img/logo.png') }}" alt="" class="brand-icon" style="height: 33px; width: auto; margin-bottom: 10px;">-->
                <span class="brand-name" style="color: white; font-weight: bold; font-size: 1.5rem;">Staff Login</span>
              </a>
            </div>

          </div>
          <div class="card-body p-5">
            <h4 class="text-dark mb-5">Sign In</h4>
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="row">
                <div class="form-group col-md-12 mb-4">
                  <input type="email" name="email" class="form-control input-lg" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="form-group col-md-12 ">
                  <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password">
                </div>
                <div class="col-md-12">
                  <div class="d-flex my-2 justify-content-between">
                    <div class="d-inline-block mr-3">
                      <label class="control control-checkbox">Remember me
                        <input type="checkbox" name="remember" />
                        <div class="control-indicator"></div>
                      </label>

                    </div>
                     <p><a class="text-blue" href="{{ route('password.request') }}">Forgot Your Password?</a></p> 
                  </div>
                  <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign In</button>
                  <!-- <p>Don't have an account yet ?
                    <a class="text-blue" href="{{ route('register') }}">Sign Up</a> -->
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

@endsection