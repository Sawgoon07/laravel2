@extends('backend.layout.main')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        
<div class="flash-message">
  @foreach(['success','error','danger','alert'] as $msg)
    
      @if(Session::has('alert-' . $msg))
        <p class="alert-{!!$msg!!}">
            {!! Session::get('alert-' . $msg)!!}
        </p> 
      @endif

 @endforeach

</div>

            <a class="btn btn-primary" href="{!! route('admin.group.create') !!}"> Add Group </a>
              <br>
              <br>
               <table class="table table-bordered">
                <tr>
                  <th>S.No</th>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
                <?php foreach($item_groups as $key=>$item_group){ ?>
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{!!$item_group->name!!}</td>
                  
                  <td>
                    <a class="btn btn-info" href="{!! route('admin.group.edit', $item_group->id) !!}">Edit</a>
                   <a class="btn btn-danger" href="{{ route('group.delete',array($item_group->id)) }}" onclick="return confirm('Are you sure?');">Delete</a>

                </td>
                </tr>
                <?php }?>
              </table>
            </div>

      </div>
    </div>
</div>

@endsection