@extends('layouts.app')

@section('content')

<div class="register">
  <div class="card">
      <h2>Profile</h2>
      <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <label for="name">Full Name</label>
          <input
            type="text"
            id="full_name"
            name="full_name"
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
          <label for="phone">Phone Number</label>
          <input
            type="tel"
            id="phone"
            name="phone"
            required
            class="@error('phone') error @enderror"
          />
          @error('phone')
            <div class="error-message">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="address">Address</label>
          <input
            type="text"
            id="address"
            name="address"
            required
            class="@error('address') error @enderror"
          />
          @error('address')
            <div class="error-message">{{ $message }}</div>
          @enderror
        </div>
        
        <div class="form-group">
          <label for="bio">Bio Data</label>
          <input
            type="text"
            id="bio"
            name="bio"
            required
            class="@error('bio') error @enderror"
          />
          @error('bio')
            <div class="error-message">{{ $message }}</div>
          @enderror
        </div>

         <div class="form-group">
          <label for="profile_image">Profile Image</label>
          <input
            type="file"
            id="profile_image"
            name="profile_image"
            required
            class="@error('bio') error @enderror"
          />
          @error('image')
            <div class="error-message">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="hobbies">Hobbies</label>
          <input
            type="text"
            id="hobbies"
            name="hobbies"
            required
            class="@error('bio') error @enderror"
          />
          @error('hobbies')
            <div class="error-message">{{ $message }}</div>
          @enderror
        </div>
         <div class="form-group">
          <label for="date_of_birth">Date</label>
          <input
            type="date"
            id="date_of_birth"
            name="date_of_birth"
            required
            class="@error('bio') error @enderror"
          />
          @error('date_of_birth')
            <div class="error-message">{{ $message }}</div>
          @enderror
        </div>
        <button type="submit" class="btn-primary">Create Profile</button>
      </form>
    </div>
</div>
  
@endsection