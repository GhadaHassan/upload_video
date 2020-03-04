@foreach ($comments as $comment)

<div class="tab-pane active" id="profile">
    <table class="table" id='comments'>
      <tbody>
        <tr>
          <td>
              <p>{{ $comment->comment }}</p>
              <p>{{ $comment->user->name }}</p>
              <small>{{ $comment->created_at }}</small>
              
          </td>
          <td class="td-actions text-right">
            <button type="button" rel="tooltip" onclick="$(this).closest('tr').next('tr').slideToggle()" class="btn btn-white btn-link btn-sm" data-original-title="Edit Comment">
              <i class="material-icons">edit</i>
            </button>
            
              <a href="{{route('comments.delete',['id' => $comment->id])}}" type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove Comment">
                <i class="material-icons">close</i>
              </a>
         
            
          </td>
        </tr>
        <tr style="display:none">
          <td colspan='4'>
            <form action="{{ route('comments.update', ['id' => $comment->id]) }}" method="POST">

              @csrf
              @include('dashboard.comments.form', ['row' => $comment])
          
              <input type="hidden" value={{ $row->id }} name="video_id">
              <button type="submit" class="btn btn-primary pull-right">Update Comment</button>
          
          </form>
          </td>
        </tr>
      
      </tbody>
    </table>
</div>

    
@endforeach