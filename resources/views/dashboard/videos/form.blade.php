@csrf

    <div class="row">
        @php $input = 'name'; @endphp
        <div class="col-md-12">
            <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Video Name</label>
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
        @php $input = 'des'; @endphp
        <div class="col-md-12">
            <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Description</label>
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
        @php $input = 'image'; @endphp
        <div class="col-md-12">
            <div>
            <label>Video Image</label>
            <input type="file" class="form-control" value="{{ isset($row) ? $row->{$input} : '' }}" name="{{$input}}" required autofocus>
           
        </div>
    </div>              
    </div>
    <hr>

    <div class="row">
        @php $input = 'youtube'; @endphp
        <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Youtube URL</label>
            <input type="url" class="form-control{{ $errors->has($input) ? ' is-invalid' : '' }}" value="{{ isset($row) ? $row->{$input} : '' }}" name="{{$input}}" required>
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
        @php $input = 'published'; @endphp
        <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Vidoe Status</label>
            <select name="{{ $input }}" class="form-control{{ $errors->has($input) ? ' is-invalid' : '' }}" >
                <option value="1" {{ isset($row) && $row{$input} == 1 ? 'selected' : ''}}>Pulished</option>
                <option value="0" {{ isset($row) && $row{$input} == 0 ? 'selected' : ''}}>Hidden</option>
            </select>
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
        
        <div class="col-md-6">
            @php $input = 'cat_id'; @endphp
            <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Category</label>
                <select name="{{ $input }}" class="form-control{{ $errors->has($input) ? ' is-invalid' : '' }}" >
                    @foreach ($cats as $cat)
                    <option value="{{ $cat->id }}" {{ isset($row) && $row{$input} == $cat->id ? 'selected' : ''}}>{{$cat->name}}</option>
                        
                    @endforeach
                </select>
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
        <div class="col-md-6">
            @php $input = 'skills[]'; @endphp
            <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Skills</label>
                <select name="{{ $input }}" class="form-control{{ $errors->has($input) ? ' is-invalid' : '' }}" multiple style="height: 100px">
                    @foreach ($skills as $skill)
                    <option value="{{ $skill->id }}"{{ in_array($skill->id ,$selectedSkills) ? 'selected' : ''}}>{{$skill->name}}</option>
                        
                    @endforeach
                </select>
                @if ($errors->has($input))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first($input) }}</strong>
                    </span>
                @endif
            </div>
        </div> 
          
        <div class="col-md-6">
            @php $input = 'tags[]'; @endphp
            <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Tags</label>
                <select name="{{ $input }}" class="form-control{{ $errors->has($input) ? ' is-invalid' : '' }}" multiple style="height: 100px">
                    @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}"{{ in_array($tag->id ,$selectedTags) ? 'selected' : ''}}>{{$tag->name}}</option>
                        
                    @endforeach
                </select>
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
        
        <div class="col-md-6">
            @php $input = 'meta_key'; @endphp
            <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Meta Keywoard</label>
                <input type="text" id="email" class="form-control{{ $errors->has($input) ? ' is-invalid' : '' }}" value="{{ isset($row) ? $row->{$input} : '' }}" name="{{$input}}">
                @if ($errors->has($input))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first($input) }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="col-md-6">
            @php $input = 'meta_des'; @endphp
            <div class="form-group bmd-form-group">

                <label class="bmd-label-floating">Meta Description</label>
                <textarea name="{{$input}}" id="" cols="30" rows="2" class="form-control{{ $errors->has($input) ? ' is-invalid' : '' }}">{{isset($row) ? $row->{$input} : ''}}</textarea>
                
            </div>
        </div>                                
    </div>
    <hr>
