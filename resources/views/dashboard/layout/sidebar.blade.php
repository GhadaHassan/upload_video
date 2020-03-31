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

            <!--
            In laravel custom helper, you can create your own function and 
            call anywhere like route, blade view, models, controller etc in
             laravel project. It is best practice to code reusable and saves 
             a lot of time to replicate the code.
            custom helper helps to reduce the re-writing the same code
             again and again. In this custom helper tutorial, 
             we will show you an example of how you can create a function in your
              custom helper and how to call this function.
            -->

            <!--
            step to create helpers:
            1. Create helpers.php File inside the app directory
              In this file, you can write our own functions and call anywhere in your laravel based project.
            2. Add File Path In composer.json File  
            3. run in terminal composer dump-autoload
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