
@extends('backend.layout.main')
@section('content')
<section class="content">
  <div class="row">
    <section class="col-lg-6 connectedSortable">

       {!! Form::open(array('url'=>route('admin.item.update',$items->id),'files'=>true,'method'=>'PUT'))!!}
       
        @if($errors->all())
            <div class="alert alert-danger">

             @foreach($errors->all() as $error)
                 <p>{{$error}}</p>
             @endforeach

            </div> 
        @endif

             <div class="form-group">
              <label for="exampleInputtitle">Categories</label>
                <Select class="form-control" name="category_id" value="category_id">
                   @foreach($categories as $category)
                  <option value="{{ $category->id }}" {!! $category->id == $items->category_id?'selected="selected"':'' !!} >{{ ucwords($category->name) }} </option>  <!-- /if else confition// -->
                  @endforeach
                </select>
               
                <br>
            </div>


             <div class="form-group">
              <label for="exampleInputtitle">Group</label>
                 <Select class="form-control" name="group_id">
                    @foreach($itemGroups as $key=>$itemGroup)
                    Category:  <option value="{{ $itemGroup->id }}" {!! $itemGroup->id == $items->item_group_id?'selected="selected"':'' !!} >{{ ucwords($itemGroup->name) }}</option>  <!-- /if else confition// -->
                    @endforeach
                  </select>
                <br>
            </div>
          
          
          
            <div class="form-group">
              <label for="exampleInputtitle">Item Name</label>
              <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Item Name" value="{!! $items->name !!}"  required />
            </div>
         
            <div class="form-group">
              <label for="exampleInputtitle">Price</label>
              <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" value="{!! $items->price !!}"  required />
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