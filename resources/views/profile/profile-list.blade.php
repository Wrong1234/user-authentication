@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-10 mx-auto mt-4">
        
        @if($profiles->count() > 0)
            <div class="row">
                @foreach($profiles as $profile)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                @if($profile->profile_image)
                                    <img src="{{ asset('storage/' . $profile->profile_image) }}" 
                                    alt="Profile Image" 
                                    class="card-img-top rounded-circle mx-auto mt-3" 
                                    style="width: 100px; height: 100px; object-fit: cover;">
                                @else
                                    <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" 
                                         style="width: 100px; height: 100px; margin: 0 auto;">
                                        <span class="text-white fs-3">{{ substr($profile->full_name, 0, 1) }}</span>
                                    </div>
                                @endif
                                
                                <h5 class="card-title">{{ $profile->full_name }}</h5>
                                <p class="card-text">
                                    <strong>Email:</strong> {{ $profile->email }}<br>
                                    <strong>Phone:</strong> {{ $profile->phone }}
                                </p>
                                <p class="card-text"><small class="text-muted">{{ Str::limit($profile->bio, 100) }}</small></p>
                                <a href="{{ route('profile.show', $profile->id) }}" class="btn btn-primary btn-sm">View Profile</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center mt-4">
                {{ $profiles->links() }}
                </div>
            </div>
        @else
            <div class="text-center mt-5">
                <h4>No Profiles Found</h4>
                <p>No user profiles have been created yet.</p>
            </div>
        @endif
    </div>
</div>
@endsection