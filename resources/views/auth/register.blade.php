@extends('auth.layout.app')
@section('title','Register')
@section('content')

            <form method="POST" action="{{ route('register') }}" class="register-form" >
                    @csrf

                    <label for="name" >{{ __('Name') }}</label>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email">
                    
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                    <button type="submit" class="btn btn-danger btn-block btn-round">
                        {{ __('Register') }}
                    </button>
                    
            </form>

@include('auth.layout.footer')

@endsection

