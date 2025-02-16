@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('Login')])

@section('content')
<div class="container " style="height: auto;">
  <div class="row align-items-center" style="background-color: #0f1116
  " >

    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto ">
      <form class="form" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="card card-hidden  p-3 mb-5 rounded " 
        style="height: 30rem;box-shadow: 0px 0px 10px 10px rgba(46, 69, 122, 0.92);border-color:#b8c6e7;border-style: solid;border-width: 2px;">
          <img src="{{ asset('imagens/dogs.png') }}" style="height: 10rem;width:18rem;margin-left:5%"  class=" " alt="...">
          <div class="card-header text-center" >
            <h4 class="card-title" style="color: white"><strong>{{ __('Olá, seja bem-vindo(a)!') }}</strong></h4>
          </div>
          <div class="card-body " >
            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" value="{{ old('email', 'admin@material.com') }}" required>
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password...') }}" value="{{ !$errors->has('password') ? "secret" : "" }}" required>
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
            <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember me') }}
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('LOGIN') }}</button>
          </div>
        </div>
      </form>
      <div class="row">
        <div class="col-6">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-light">
                    <!-- <small>{{ __('Forgot password?') }}</small> -->
                </a>
            @endif
        </div>
        <div class="col-6 text-right">
            <a href="{{ route('register') }}" class="text-light">
                <small>{{ __('Create new account') }}</small>
            </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
