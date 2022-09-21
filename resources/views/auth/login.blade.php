@extends('templates.template')
@section('content')
<form class="auth-form">
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  @csrf
  <div class="form-outline mb-4">
    <label class="form-label" for="form2Example1">Email address</label>
    <input type="email" id="form2Example1" class="form-control" />
  </div>

  <div class="form-outline mb-4">
    <label class="form-label" for="form2Example2">Password</label>
    <input type="password" id="form2Example2" class="form-control" />
  </div>

  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>
    <div class="col"><a href="#!">Forgot password?</a></div>
  </div>

  <div class="mb-4"><a href="{{ route('register.form') }}">Don't have an account? Register one here!</a></div>

  <button type="button" class="btn btn-primary btn-block w-100 mb-4 ">Sign in</button>
</form>
@endsection