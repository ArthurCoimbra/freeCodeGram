<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\User;

class ProfilesController extends Controller
{
    public function index(\App\User $user)
    {
        return view('profiles/index', compact('user'));
    }

    public function edit(\App\User $user)
    {
        $this->authorize('update', $user->profile);

        return view('profiles/edit', compact('user'));
    }

    public function update(\App\User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
          'title' => 'required',
          'description' => 'required',
          'url' => 'url',
          'image' => '',
        ]);

        if (request('image')){
          $imagePath = request('image')->store('profile','public');

          $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
          $image->save();
        }

        auth()->user()->profile->update(array_merge(
          $data,
          ['image' => $imagePath],
        ));

        return redirect("/profile/{$user->id}");
    }
}
