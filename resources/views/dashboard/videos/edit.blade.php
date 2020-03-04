@extends('dashboard.layout.app')

@section('title')
  {{$pageTitle}}
@endsection
@section('content')

@component('dashboard.layout.navbar', ['navbar_title' => $pageTitle])
@endcomponent

<div class="content">
    <div class="container-fluid">
      
      @component('dashboard.shared.edit',['pageTitle' => $pageTitle, 'pageDes' => $pageDes])

        @slot('slot')
          <div class="card-body">
            <form action="{{route('videos.update',$row->id)}}" method="POST" enctype="multipart/form-data">
                {{ method_field('put')}}
                @include('dashboard.'.$routename.'.form')
                
                <button type="submit" class="btn btn-primary pull-right">{{$pageTitle}}</button>
                <div class="clearfix"></div>
              </form>
          </div>
            
        @endslot

        @slot('md4')

          @php
          $url = getYoutubeId($row->youtube)   
          @endphp

          @if($url)
            <div class="container">
              <iframe width="300" height="200" style="padding-top:10px" src="https://www.youtube.com/embed/{{$url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    

            </div>
            <hr>
          @endif  
          <div class="container">
            <img width="300" height="200" style="padding-bottom:10px" src="{{ url('uploads/'.$row->image) }}" >
          </div>
        @endslot
        
        
      @endcomponent

      @component('dashboard.shared.edit',['pageTitle' => 'comments', 'pageDes' => 'here we can control comments'])   
    
        @include('dashboard.comments.index')

          @slot('md4')

           @include('dashboard.comments.create')
           
          @endslot
        
      @endcomponent
      
    </div>
</div>








@endsection