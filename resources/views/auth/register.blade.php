@extends('layouts.app')

@section('content')

<div class="register">
  <div class="card">
      <h2>User Registration</h2>
      <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
          <label for="name">Full Name</label>
          <input
            type="text"
            id="name"
            name="name"
            value="{{ old('name') }}"
            required
            class="@error('name') error @enderror"
          />
          @error('name')
            <div class="error-message">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="email">Email Address</label>
          <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email') }}"
            required
            class="@error('email') error @enderror"
          />
          @error('email')
            <div class="error-message">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input
            type="password"
            id="password"
            name="password"
            required
            class="@error('password') error @enderror"
          />
          @error('password')
            <div class="error-message">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="password_confirmation">Confirm Password</label>
          <input type="password" id="password_confirmation" name="password_confirmation" required />
        </div>

        <button type="submit" class="btn-primary">Register</button>

        <div class="login-link">
          Already have an account? <a href="{{ route('login') }}">Login here</a>
        </div>
      </form>
    </div>
</div>
  

@endsection