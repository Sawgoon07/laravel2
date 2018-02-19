@extends('backend.layout.main')
@section('content')
<section class="content">
  <div class="row">
    <section class="col-lg-7 connectedSortable">

      {!! Form::open(array('url'=>route('admin.group.update',$item_groups->id),'files'=>true,'method'=>'PUT'))!!}

               @if($errors->all()) 
              <div class="alert alert-danger"> 
              
              @foreach($errors->all() as $error)
                <p>{{$error}}</p>
              @endforeach

            </div>
            @endif
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputtitle">Name</label>
                  <input type="text" class="form-control" id="name" name="name" 
                  placeholder="Enter Name" value="{!! $item_groups->name !!}" required />
                </div>
                

              </div>
              <!-- /.box-body -->

              <div class="footer col-lg-8">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
                 
        {!! Form::close()!!}
          
    </section>
         
  </div>
</section>
@endsection