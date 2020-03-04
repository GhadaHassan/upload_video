<div class="col-md-12">
    @php $input = 'comment'; @endphp
    <div class="form-group bmd-form-group">

        <label class="bmd-label-floating">Comment</label>
        <textarea name="{{$input}}" id="" cols="30" rows="2" class="form-control{{ $errors->has($input) ? ' is-invalid' : '' }}">{{isset($row) ? $row->{$input} : ''}}</textarea>
        
    </div>
</div>