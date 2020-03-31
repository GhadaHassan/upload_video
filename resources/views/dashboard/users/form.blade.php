@csrf

<div class="row">
    @php $input = 'name'; @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">Username</label>
        <input type="text" class="form-control{{ $errors->has($input) ? ' is-invalid' : '' }}" value="{{ isset($row) ? $row->{$input} : '' }}" name="{{$input}}" required autofocus>
        @if ($errors->has($input))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first($input) }}</strong>
            </span>
        @endif
    </div>
</div>              
</div>
<hr>
<div class="row">
    @php $input = 'email'; @endphp
    <div class="col-md-6">
    <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">Email Address</label>
        <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ isset($row) ? $row->{$input} : '' }}" name="{{$input}}" required>
        @if ($errors->has($input))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first($input) }}</strong>
            </span>
        @endif
    </div>
    </div>                                
</div>
<hr>
<div class="row">
    @php $input = 'password'; @endphp
    <div class="col-md-6">
    <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">Password</label>
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="{{$input}}">
            @if ($errors->has($input))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first($input) }}</strong>
                </span>
            @endif
    </div>
    </div>
</div>
<hr>
<div class="row">
    @php $input = 'group'; @endphp
    <div class="col-md-6">
    <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">User Group</label>
        <select name="{{ $input }}" class="form-control{{ $errors->has($input) ? ' is-invalid' : '' }}" >
            <option value="admin" {{ isset($row) && $row{$input} == 'admin' ? 'selected' : ''}}>Admin</option>
            <option value="user" {{ isset($row) && $row{$input} == 'user' ? 'selected' : ''}}>User</option>
        </select>
        @if ($errors->has($input))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first($input) }}</strong>
            </span>
        @endif
    </div>
    </div>                                
</div>