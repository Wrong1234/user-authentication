@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Profile</h4>
                </div>
                <div class="card-body">
                    @if($profile)
                        <div class="row align-items-center">
                            {{-- Profile Image --}}
                            <div class="col-md-12 text-center mb-5 mb-md-0">
                                @if($profile->profile_image)
                                    <img src="{{ asset('storage/' . $profile->profile_image) }}" 
                                         alt="Profile Image" 
                                         class="card-img-top rounded-circle mx-auto mt-3" 
                                         style="width: 200px; height: 200px; object-fit: cover;">
                                @else
                                    <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center border" 
                                         style="width: 180px; height: 180px; margin: 0 auto;">
                                        <span class="text-white fs-2">{{ substr($profile->full_name, 0, 1) }}</span>
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-12 mt-3">
                                <h3 class="mb-2">{{ $profile->full_name }}</h3>
                                <p class="mb-1"><strong>Email:</strong> {{ $profile->email }}</p>
                                <p class="mb-1"><strong>Phone:</strong> {{ $profile->phone }}</p>
                                <p class="mb-1"><strong>Date of Birth:</strong> {{ $profile->date_of_birth->format('F j, Y') }}</p>
                                <p class="mb-1"><strong>Address:</strong> {{ $profile->address }}</p>
                                <p class="mb-1"><strong>Hobbies:</strong> {{ $profile->hobbies }}</p>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12">
                                <h5>Bio</h5>
                                <p>{{ $profile->bio }}</p>
                            </div>
                        </div>
                    @else
                        {{-- No Profile Message --}}
                        <div class="text-center py-5">
                            <h4>No Profile Found</h4>
                            <p>You haven't created a profile yet.</p>
                            <a href="{{ route('profile.create') }}" class="btn btn-primary">Create Profile</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection