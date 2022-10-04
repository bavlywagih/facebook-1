@extends('template.template')
@section('content')
  <form class="auth-form" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-outline mb-4">
      <label class="form-label" for="email">Email address</label>
      <input type="email" name="email" id="email" class="form-control"/>
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="password">Password</label>
      <input type="password" name="password" id="password" class="form-control"/>
    </div>
    <div class="row mb-4">
      <div class="col d-flex justify-content-center">
        <div class="form-check">
          <input class="form-check-input" name="remember" type="checkbox" value="1" id="remember" checked/>
          <label class="form-check-label" for="remember">Remember me</label>
        </div>
      </div>
      <div class="col"><a href="{{ route('forget-password.form') }}">Forgot password?</a></div>
    </div>
    <div class="mb-4"><a href="{{ route('register.form') }}">Don't have an account? Register one here!</a></div>
    <button type="submit" class="btn btn-primary btn-block w-100 mb-4 ">Sign in</button>
  </form>
@endsection
