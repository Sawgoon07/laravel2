
@extends('backend.layout.main')
@section('content')
<section class="content">
  <div class="row">
    <section class="col-lg-6 connectedSortable">

      {!! Form::open(array('route'=>'admin.item.store','files'=>true))!!}
       
        @if($errors->all())
            <div class="alert alert-danger">

             @foreach($errors->all() as $error)
                 <p>{{$error}}</p>
             @endforeach

            </div> 
        @endif

             <div class="form-group">
              <label for="exampleInputtitle">Categories</label>
                 <Select class="form-control" name="category_id">
                    @foreach($category as $key=>$categories)
                    Category:  <option value="{{ $categories->id }}">{{ ucwords($categories->name) }}</option>
                    @endforeach
                  </select>
                <br>
            </div>

             <div class="form-group">
              <label for="exampleInputtitle">Group</label>
                 <Select class="form-control" name="group_id">
                    @foreach($itemGroups as $key=>$itemGroup)
                    Category:  <option value="{{ $itemGroup->id }}">{{ ucwords($itemGroup->name) }}</option> 
                    @endforeach
                  </select>
                <br>
            </div>
          
          
            <div class="form-group">
              <label for="exampleInputtitle">Item Name</label>
              <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Item Name"  required />
              
            </div>
         
            <div class="form-group">
              <label for="exampleInputtitle">Price</label>
              <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price"  required />
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