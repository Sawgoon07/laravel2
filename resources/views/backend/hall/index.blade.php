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
            <a class="btn btn-primary" href="{!! route('admin.hall.create') !!}"> Add Hall </a>
          <br>
          <br>

          <table class="table table-bordered">
              <tr>
                <th>S.No</th>
                <th>Name</th>
               <th>Shift</th>
                <th style="width:15%;">Status</th>
                <th>Action</th>
              </tr>

              <?php foreach($halls as $key=>$hal){ ?>
                
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{!!$hal->name!!}</td>
                    <td>{!!$hal->shifts_id!!}</td> 
                    <td>{!!$hal->status!!}</td> 
                    <td>
                    
                      <a class="btn btn-info" href="{!! route('admin.hall.edit', $hal->id) !!}">Edit</a>
                      <a class="btn btn-danger" href="{!! route('hall.delete', $hal->id) !!}" onclick="return confirm('Are you sure?');">Delete</a>
                  </td>
                  </tr>
                  <?php }?>
              

            </table>
      </div>
          <script type="text/javascript">
            function deleteRec(elem){
              var result = confirm('Are you sure your want to delete this record?');
              if(result){
                return true;
              }else{
                return false;
              }
            }
          </script>

      </div>
  </div>


  </div>
@endsection