@extends('template.template')
@section('content')
  <form class="auth-form" method="POST" action="{{ route('password.update') }}">
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
      <label class="form-label" for="email">Email address</label>
      <input type="email" id="email" name="email" class="form-control" required readonly />
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="password">Password</label>
      <input type="password" id="password" name="password" class="form-control" required />
    </div>

    <div class="form-outline mb-4">
      <label class="form-label" for="password_confirmation">Password Confirmation</label>
      <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required />
    </div>

    <button type="submit" class="btn btn-primary btn-block w-100 mb-4">Reset Password</button>
  </form>
@endsection
