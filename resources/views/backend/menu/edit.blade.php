@extends('backend.layout.main')
@section('content')
<section class="content">
  <div class="row">
    <section class="col-lg-7 connectedSortable">

      {!! Form::open(array('url'=>route('admin.menu.update',$menu->id),'files'=>true,'method'=>'PUT'))!!}

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
                    <input type="text" class="form-control" id="name" name="name" value="{{ $menu->name }}"  placeholder="Enter Name"  required />
                </div>

                <div class="col-lg-6">
                    <h3>Choose Category</h3> <br>
                    @foreach($categories as $category)
                        <input type="checkbox" name="categories[]"
                               {!!  in_array($category->id, $menu_categories)?'checked':'' !!}
                               value="{{ $category->id }}">{{ $category->name }}<br>
                    @endforeach
                </div>




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