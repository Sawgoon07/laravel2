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

            <a class="btn btn-primary" href="{!! route('admin.shift.create') !!}"> Add shift </a>
              <br>
              <br>
               <table class="table table-bordered">
                <tr>
                  <th>S.No</th>
                  <th>Name</th>
                  <th>Start Time</th>
                  <th>End Time</th>
                  <th>Action</th>
                </tr>
                <?php foreach($shifts as $key=>$shift){ ?>
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{!!$shift->name!!}</td>
                  <td>{!!$shift->starttime!!}</td>
                  <td>{!!$shift->endtime!!}</td>
                   <td>
                    <a class="btn btn-info" href="{!! route('admin.shift.edit', $shift->id) !!}">Edit</a>
                    <a class="btn btn-danger" href="{!! route('shift.delete', $shift->id) !!}" onclick="return confirm('Are you sure?');">Delete</a>
                </td>
                </tr>
                <?php }?>
              </table>
            </div>
     </div>
    </div>
</div>

@endsection