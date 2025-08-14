<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{

     public function index()
    {
        $profiles = Profile::with('user')->paginate(3);
        return view('profile.profile-list', compact('profiles'));
    }

     public function show($id)
    {
        $profile = Profile::find($id);
        return view('profile.show-profile', compact('profile'));
    }
    public function create()
    {
        return view('profile.create-profile');
    }

    public function store(Request $request)
    {
        $request->validate([

            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:500',
            'bio' => 'required|string',
            'profile_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'hobbies' => 'required|string|max:255',
            'date_of_birth' => 'required|date|before:today',
        ]);
        $imagePath = null;
        if ($request->hasFile('profile_image')) {
            $imagePath = $request->file('profile_image')->store('profiles', 'public');
        }
        $profile = Profile::create([
            'user_id' => Auth::id(),
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'bio' => $request->bio,
            'profile_image' => $imagePath,
            'hobbies' => $request->hobbies,
            'date_of_birth' => $request->date_of_birth,
        ]);
        return redirect()->route('profiles.index')->with('success', 'Profile created successfully!');
    }
}