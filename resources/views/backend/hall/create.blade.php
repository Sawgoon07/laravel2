@extends('backend.layout.main')
@section('content')
<section class="content">
  <div class="row">
      <section class="col-lg-6 connectedSortable">

          {!! Form::open(array('route'=>'admin.hall.store','files'=>true))!!}
           
            @if($errors->all())
                <div class="alert alert-danger">

                 @foreach($errors->all() as $error)
                     <p>{{$error}}</p>
                 @endforeach

                </div> 
            @endif

              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputtitle">Hall Name</label>
                  <input type="text" class="form-control" id="title" name="name"  placeholder="Enter Hall Name"  required />
                </div>
                
                <div class="form-group">
                  <label for="category">Shift:</label>
                   <Select class="form-control" name="shifts_id">
                    @foreach($shifts as $key=>$shift)
                    Shift:  <option value="{{ $shift->id }}">{{ ucwords($shift->name) }}</option>
                    @endforeach
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="category" >Status:</label>
                    <select  class="form-control" name="status">
                      <option value="">-Select-</option>
                      <option value="1">Available</option>
                      <option value="0">Not Availabe</option>
                    </select>
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