<div class="sidebar" data-color="purple" data-background-color="black" data-image="{{url('admin/assets/img/sidebar-2.jpg')}}">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
      <a href="{{url('/dashboard')}}" class="simple-text logo-normal">
        Creative Tim
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">

        <li class="nav-item {{is_active('home')}}">
          <a class="nav-link" href="{{url('/dashboard/home')}}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-item {{is_active('users')}}">
            <!--
              To make icon is active ==> go to composer to create helper and make folder and file helpers
              go to terminal 
            -->
          <a class="nav-link" href="{{url('/dashboard/users')}}">
            <i class="material-icons">person</i>
            <p>User Profile</p>
          </a>
        </li>

        <li class="nav-item {{is_active('categories')}}">
          <!--
            To make icon is active ==> go to composer to create helper and make folder and file helpers
            go to terminal 
          -->
          <a class="nav-link" href="{{url('/dashboard/categories')}}">
            <i class="material-icons">bubble_chart</i>
            <p>Categories</p>
          </a>
        </li>

        <li class="nav-item {{is_active('skills')}}">
          <!--
            To make icon is active ==> go to composer to create helper and make folder and file helpers
            go to terminal 
          -->
          <a class="nav-link" href="{{url('/dashboard/skills')}}">
            <i class="material-icons">content_paste</i>
            <p>Skills</p>
          </a>
        </li>

        <li class="nav-item {{is_active('tags')}}">
          <!--
            To make icon is active ==> go to composer to create helper and make folder and file helpers
            go to terminal 
          -->
          <a class="nav-link" href="{{url('/dashboard/tags')}}">
            <i class="material-icons">aspect_ratio</i>
            <p>Tags</p>
          </a>
        </li>

        <li class="nav-item {{is_active('pages')}}">
          <!--
            To make icon is active ==> go to composer to create helper and make folder and file helpers
            go to terminal 
          -->
          <a class="nav-link" href="{{url('/dashboard/pages')}}">
            <i class="material-icons">library_books</i>
            <p>Pages</p>
          </a>
        </li>

        <li class="nav-item {{is_active('videos')}}">
          <!--
            To make icon is active ==> go to composer to create helper and make folder and file helpers
            go to terminal 
          -->
          <a class="nav-link" href="{{url('/dashboard/videos')}}">
            <i class="material-icons">video_library</i>
            <p>Video</p>
          </a>
        </li>

        <!-- your sidebar here -->
      </ul>
    </div>
  </div>