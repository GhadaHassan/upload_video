@extends('layouts.app')

@section('title')
    {{$video->name}}
@endsection

@section('content')

<div class="section section-buttons">
  <div class="container">
    <div class="title">
      <h1>{{ $video->name }}</h1>
    </div>
    

    <div class="row">
        <div class="col-md-12">
            @php
            $url = getYoutubeId($video->youtube)   
            @endphp
    
            @if($url)
            <iframe height="500" width="100%" height="200" src="https://www.youtube.com/embed/{{$url}}" frameborder="0" allowfullscreen></iframe>                        @endif                      
    
        </div>
        
    </div>

    <div class="row">
        <div class="col-md-12">
            <p>{{ $video->user->name }}</p>
            <p>{{ $video->created_at}}</p>
            <p>{{ $video->des }}</p>
            <p>
                <a href="{{ route('front.category', ['id' => $video->cat->id]) }}">{{ $video->cat->name }}</a>
            </p>
            <p>
                @foreach ($video->tags as $tag)
                    <a href="{{ route('front.tag', ['id' => $tag->id]) }}">
                        <span class="badge badge-pill badge-primary">{{ $tag->name }}</span>
                    </a>
                @endforeach
            </p>
            <p>
                @foreach ($video->skills as $skill)
                <a href="{{ route('front.skill', ['id' => $skill->id]) }}">
                <span class="badge badge-pill badge-info">{{ $skill->name }}</span>
                @endforeach
            </p>
        </div>
    </div>
    
    <div class="row" id="commets">
        <div class="col-md-12">
            <div class="card text-left">
                <div class="card-header card-header-rose"><br>
                    @php
                     $comments = $video->comments
                    @endphp
                    <h4>Comments {{ count($comments) }}</h4>
                </div>
                <div class="card-body">
                    
                    @foreach ( $comments as $comment)
                        <div class="row">
                            <div class='col-md-8'>
                                <li class="nc-icon nc-chat-33"></li> :  {{$comment->user->name}}
                            </div>
                            <div class='col-md-4'>

                                <span>
                                    <li class="nc-icon nc-calendar-60"></li> :  {{$comment->created_at}} 
                                </span>

                                @if ( (auth()->user()->group == 'admin') | (auth()->user()->id == $comment->user->id))
                                    <a href=""> | Edit</a>
                                    <div>
                                        <form action="{{ route('front.commentUpdate', ['id' => $comment->id]) }}" method="POST">
                                            @csrf
                                            <textarea name="comment" id="" rows="5">{{$comment->comment}}</textarea>
                                            <button type="submit">Edit</button>
                                            
                                        </form>
                                    </div>
                                @endif
                                
                            </div>
                        </div>
                        
                        <p> {{ $comment->comment}} </p>
                        @if (!$loop->last)  
                            <hr>                          
                        @endif
                    @endforeach
                  {{-- <h4 class="card-title">Special title treatment</h4>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                </div>
              </div>
            
        </div>
    </div>
  </div>
</div>

@endsection
