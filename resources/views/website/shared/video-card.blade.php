

<div class="card" style="width: 18rem;">
    <a href="{{ route('front.video' ,['id' => $video->id]) }}" title="{{ $video->name }}">
        <img class="card-img-top" style="max-height:160px" src="{{ url('uploads/'.$video->image) }}" alt="Card image cap">
    </a>
  
    <div class="card-body">
        <p class="card-text">
            {{ $video->name }}
        </p>
        <small>{{ $video->created_at }}</small>
        {{-- <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul> --}}
      </div>
   
  </div>