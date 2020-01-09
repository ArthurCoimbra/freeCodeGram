@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-8">
        <img src="/storage/{{ $post->image }}" alt="imagem" class="w-100"/>
      </div>

      <div class="col-4">
        <div>

          <div class="d-flex align-items-center">
            <div class="pr-3">
              <img src="/storage/{{ $post->user->profile->image }}" class="w-100 rounded-circle" style="max-width: 40px;" />
            </div>
            <div>
              <a href="/profile/{{ $post->user->id }}" class="font-weight-bold text-dark">{{ $post->user->username }}</a>
              <a href="#" class="pl-3">Follow</a>
            </div>
          </div>

          <hr/>

          <p><a href="/profile/{{ $post->user->id }}" class="font-weight-bold pr-1 text-dark">{{ $post->user->username }}</a>{{ $post->caption }}</p>
        </div>
      </div>
    </div>
  </div>
@endsection
