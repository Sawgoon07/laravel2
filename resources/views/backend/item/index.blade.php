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

            <a class="btn btn-primary" href="{!! route('admin.item.create') !!}"> Add Items </a>
             <a class="btn btn-success pull-right" href="#"> Import CSV File </a>
          <br>
          <br>
       
            <table width="100%" class="table table-bordered">
                <tr>
                  <th width="20%">S.No</th>
                  <th>Item Name</th>
                  <th>Price</th>
                   <th>Categories</th>
                   <th>Group</th>
                  <th>Action</th>
                </tr>
                <?php foreach($items as $key=>$it){ ?>
                
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{!!$it->name!!}</td>
                    <td>{!!$it->price!!}</td>
                    <td>{!!$it->category_id!!}</td>
                    <td>{!!$it->item_group_id!!}</td>
                    <td>
                      <a class="btn btn-info" href="{!! route('admin.item.edit', $it->id) !!}">Edit</a>
                      <a class="btn btn-danger" href="{!! route('item.delete', $it->id) !!}" onclick="return confirm('Are you sure?');">Delete</a>
                  </td>
                  </tr>
                  <?php }?>

              
              </table>
              <?php echo $items->render(); ?>
        
          

      </div>
  </div>
</div>
@endsection