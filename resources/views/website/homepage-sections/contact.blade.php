@section('contact')

<!--
  to make contact Us
  1- php artisan make:model Models/Msg -m
  2- php artisan make:request Frontend/Msgs/Store
  3- php artisan make:controller Frontend/Msgscontroller
  
  4- php artisan migrate
-->
<div class="section landing-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <h2 class="text-center">Keep in touch?</h2>
        <form class="contact-form" method="POST" action="{{ route('contact.store') }}">
          <div class="row">
            <div class="col-md-6">
                @php
                    $input = 'name';       
                @endphp
              <label>Name</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="nc-icon nc-single-02"></i>
                  </span>
                </div>
                <input type="text" name='{{ $input }}' class="form-control{{ $errors->has($input) ? ' is-invalid' : '' }}" placeholder="Name">
                @if ($errors->has($input))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first($input) }}</strong>
                    </span>
                @endif
            </div>
            </div>
            <div class="col-md-6">
                @php
                    $input = 'email';       
                @endphp
              <label>Email</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="nc-icon nc-email-85"></i>
                  </span>
                </div>
                <input name={{ $input }} type="email" class="form-control{{ $errors->has($input) ? ' is-invalid' : '' }}" name="{{$input}}" required autofocus placeholder="Email">
                @if ($errors->has($input))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first($input) }}</strong>
                    </span>
                @endif
              </div>
            </div>
          </div>
          @php
              $input = 'msg';       
          @endphp
          <label>Message</label>
          <textarea class="form-control{{ $errors->has($input) ? ' is-invalid' : '' }}" name="{{$input}}" required autofocus rows="4" placeholder="Tell us your thoughts and feelings..."></textarea>
          @if ($errors->has($input))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first($input) }}</strong>
            </span>
          @endif
          <div class="row">
            <div class="col-md-4 ml-auto mr-auto">
              <button class="btn btn-danger btn-lg btn-fill">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection