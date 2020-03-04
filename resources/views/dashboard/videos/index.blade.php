@extends('dashboard.layout.app')

{{-- @php
   $pageTitle = 'Users Controller';   
   $pageDes = "Here you can add / edit / delete users"; 
@endphp --}}

@section('title')
  {{$pageTitle}}
@endsection
@section('content')

@component('dashboard.layout.navbar', ['navbar_title' => $pageTitle])
@endcomponent

<div class="content">
    <div class="container-fluid">
      
      @component('dashboard.shared.table',['pageTitle' => $pageTitle, 'pageDes' => $pageDes])

        @slot('addButton')
          <div class="col-md-3 text-center">
            <a href="/dashboard/{{$routename}}/create" class="btn btn-dark btn-round">Add {{$routename}}</a>
          </div>
        @endslot 
        
        @slot('table')
          <table class="table">
            <thead class=" text-primary">
              <th>
                ID
              </th>
              <th>
                Name
              </th>
              <th>
                Youtube
              </th>
              <th>
                Published
              </th>
              <th>
                Image
              </th>
              <th>
                Category
              </th>
              <th>
                User
              </th>
              <th>
                Control
              </th>
            </thead>
            <tbody>
              @foreach ($rows as $row)
              <tr>
                  <td>{{$row->id}}</td>
                  <td>{{$row->name}}</td>
                  <td>
                    @php
                    $url = getYoutubeId($row->youtube)   
                    @endphp

                    @if($url)
                        <iframe width="300" height="200" src="https://www.youtube.com/embed/{{$url}}" frameborder="0" allowfullscreen></iframe>                        @endif                      
                  </td>
                  <td>
                    <img height="150px" width="150px" src="{{ url('uploads/'.$row->image) }}" >
                  </td>
                  <td>
                    @if ($row->published == 1)
                      published
                    @else
                      hidden  
                    @endif
                  </td>
                  <td>{{$row->cat->name}}</td>
                  <td>{{$row->user->name}}</td>
                  <td class="text-primary" class="td-actions">

                    <!-- To make edit and delete buttoms is shared-->
                      @include('dashboard.shared.buttoms.edit')

                      @include('dashboard.shared.buttoms.delete')
                                       
                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>   
          {{ $rows->links() }} 
        @endslot
         
      @endcomponent
    </div>
</div>
    
@endsection