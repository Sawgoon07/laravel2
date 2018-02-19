@extends('backend.layout.main')
@section('content')
<section class="content">
  <div class="row">
      <section class="col-lg-6 connectedSortable">

        {!! Form::open(array('route'=>'admin.category.store','files'=>true))!!}

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
                  <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Name"  required />
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