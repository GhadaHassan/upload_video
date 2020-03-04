@extends('layouts.app')

@section('content')

<div class="section section-buttons" id="video">
  <div class="container">
    <div class="title">
      <h2>Lastest Videos</h2>
    </div>
    @include('website.shared.video-row')

    
  </div>
</div>

@endsection
