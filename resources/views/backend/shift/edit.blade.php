@extends('backend.layout.main')
@section('content')
<section class="content">
  <div class="row">
      <section class="col-lg-6 connectedSortable">

        {!! Form::open(array('url'=>route('admin.shift.update',$shifts->id),'files'=>true,'method'=>'PUT'))!!}

         @if($errors->all())
              <div class="alert alert-danger">

               @foreach($errors->all() as $error)
                   <p>{{$error}}</p>
               @endforeach

              </div> 
          @endif

        
            <div class="box-body">
              
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputtitle">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{!! $shifts->name !!}">
              </div>

                <div class="form-group">
                  <label for="exampleInputtitle">Start Time</label>
                  <input type="time" class="form-control" id="starttime" name="starttime"  placeholder="Enter Start Time" value="{!! $shifts->starttime !!}">
              </div>

                <div class="form-group">
                  <label for="exampleInputtitle">End Time</label>
                  <input type="time" class="form-control" id="endtime" name="endtime"  placeholder="Enter End Time" value="{!! $shifts->endtime !!}">
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