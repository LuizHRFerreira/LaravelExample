@extends('layouts.app')
@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="/">
            <img src="{{ asset('dist/images/sidebar/logo.png') }}" alt="logo" class="brand-image img-circle elevation-3 logo-login" style="opacity: .8">
        </a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">{{ trans('message.log_in_to_start_your_session') }}</p>
      
        <x-validation-errors class="mb-4 text-danger" />

        <form action="{{ route('login') }}" method="post">
            @csrf
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="E-mail" >
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Senha">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            {{-- <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember" name="remember">
                    Lembre de mim
                </label>
              </div>
            </div> --}}
            <!-- /.col -->
            <div class="col-12 mb-3">
              <button type="submit" class="btn btn-primary btn-block">{{ trans('text.enter') }}</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <p class="mb-1">
          <a href="{{ url('forgot-password') }}">{{ trans('message.forgot_my_password') }}</a>
        </p>
        <p class="mb-0">
          <a href="{{ url('register') }}" class="text-center">{{ trans('message.create_new_account') }}</a>
        </p>
      </div>
    </div>
</div>
@endsection

