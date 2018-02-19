@extends('header.layout.main')
@section('content')
<section>
  <div class="container">
       <div class="row">
        <center><h2>Edit Booking</h2></center>
          <div class="col-lg-10">
    
      {!! Form::open(array('route'=>'booking.store','files'=>true))!!}
       
             
              <div class="form-group">
                  <label for="exampleInputname">Client Name</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ $data['row']->name }}" placeholder="Enter Client Name">
              </div>
             

            <div class="form-group">
              <label for="exampleInputaddress">Address</label>
              <textarea type="text" class="form-control" id="address" name="address"
                        placeholder="Enter Address">{{ $data['row']->address }}</textarea>
            </div>
            

            <div class="form-group">
              <label for="occassion">Occassion:</label>
                <select  name="occassion" id="occ" class="form-control">
                  <option value="">-Select-</option>
                  <option value="wedding" {{ isset($data['row']) && $data['row']->occassion == 'wedding'?'selected':'' }}>Wedding</option>
                  <option value="enagement" {{ isset($data['row']) && $data['row']->occassion == 'enagement'?'selected':'' }} >Enagement</option>
                  <option value="anniversity" {{ isset($data['row']) && $data['row']->occassion == 'anniversity'?'selected':'' }} >Anniversity</option>
                  <option value="bartaman" {{ isset($data['row']) && $data['row']->occassion == 'bartaman'?'selected':'' }} >Bartaman</option>
                  <option value="gufaa" {{ isset($data['row']) && $data['row']->occassion == 'gufaa'?'selected':'' }}>Gufaa</option>
                  <option value="birthday" {{ isset($data['row']) && $data['row']->occassion == 'birthday'?'selected':'' }}>Birthday</option>
                  <option value="pasane" {{ isset($data['row']) && $data['row']->occassion == 'pasane'?'selected':'' }}>Pasane</option>
                  <option value="janku" {{ isset($data['row']) && $data['row']->occassion == 'janku'?'selected':'' }}>Janku</option>
                  <option value="saradaa" {{ isset($data['row']) && $data['row']->occassion == 'saradaa'?'selected':'' }}>Saradaa</option>
                  <option value="other" {{ isset($data['row']) && $data['row']->occassion == 'other'?'selected':'' }}>Other</option>
                </select>
            </div>

             <div class="form-group">
              <label  for="date">Event Date:</label>
                <input type="date" class="form-control" id="event" name="event"
                       value="{{ isset($data['row'])?$data['row']->event:'' }}" placeholder="Enter Event Date">
            </div>

            <div class="form-group">
              <label for="total">Total No. of People:</label>
                <select  name="total" id="total" class="form-control">
                  <option value="10" {{ isset($data['row']) && $data['row']->total == '10'?'selected':'' }}>0-100</option>
                  <option value="20" {{ isset($data['row']) && $data['row']->total == '20'?'selected':'' }}>100-200</option>
                  <option value="30" {{ isset($data['row']) && $data['row']->total == '30'?'selected':'' }}>200-300</option>
                  <option value="40" {{ isset($data['row']) && $data['row']->total == '40'?'selected':'' }}>300-400</option>
                  <option value="50" {{ isset($data['row']) && $data['row']->total == '50'?'selected':'' }}>400-500</option>
                  <option value="60" {{ isset($data['row']) && $data['row']->total == '60'?'selected':'' }}>500-600</option>
                  <option value="70" {{ isset($data['row']) && $data['row']->total == '70'?'selected':'' }}>600-700</option>
                  <option value="80" {{ isset($data['row']) && $data['row']->total == '80'?'selected':'' }}>700-800</option>
                  <option value="90" {{ isset($data['row']) && $data['row']->total == '90'?'selected':'' }}>800-900</option>
                  <option value="100" {{ isset($data['row']) && $data['row']->total == '100'?'selected':'' }}>1000+</option>
                </select>
            </div>


              <div class="form-group">
                  <label  for="hall">Shift:</label>
                  <select  name="shift" id="shift" class="form-control">
                      <option value="">-Select Shift-</option>
                      @foreach($data['shifts'] as $shift)
                          <option value="{{ $shift->id }}" {{ isset($data['row']) && $data['row']->shift->id == $shift->id?'selected':'' }}>{{ $shift->name }}</option>
                      @endforeach
                  </select>
              </div>

            <div class="form-group">
              <label  for="hall">Halls:</label>
                <select  name="hall" id="hall" class="form-control">
                  <option value="">-Select-</option>
                    @if (isset($data['halls']))
                        @foreach($data['halls'] as $key => $hall)
                            <option value="{{ $key }}" {{ $data['row']->hall_id == $key?'selected':'' }}>{{ $hall }}</option>
                        @endforeach
                        @endif
                </select>
            </div>

            <div class="form-group">
              <label for="category">Category:</label>
                  <select  name="category" id="category" class="form-control">
                    <option value="">-Select-</option>
                      @foreach($data['category_group'] as $group)
                          <option value="{{ $group->id }}" {{ $data['row']->category_id == $group->id?'selected':'' }}>{{ $group->name }}</option>
                          @endforeach
                  </select>
            </div>

            <div class="form-group">
              <label for="menu">Menu:</label>
                <select  name="menu" id="menu" class="form-control">
                  <option value="">-Select-</option>
                    @if (isset($data['menu_ids']))
                        @foreach($data['menu_ids'] as $key => $menu)
                            <option value="{{ $key }}" {{ $data['row']->menu_id == $key?'selected':'' }}>{{ $menu }}</option>
                        @endforeach
                    @endif
                 </select>
            </div>


              <div id="item-wrapper" class="row">

              </div>

              <br>
              <div class="form-group">
                  <label for="menu">Total Amount:</label>
                  <span id="Totalcost"></span>

              </div>



              <br>
    
          <!-- /.box-body -->

          <div class="footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="clear" class="btn btn-danger">Clear</button>
          </div>
      </div>

           {!! Form::close()!!}
    
  </div>  
</div>
</div>
</section>  
@endsection


@section('js')

    <script>
        $(document).ready(function () {

            loadItemsByMenu($('#menu'), '{{ $data['row']->id }}');

            // load menu by category group
            $('#category').change(function () {

                var category = $(this).val();
                $.ajax({
                    'method' : 'POST',
                    'url' : '{{ route('get-menu-by-category-group') }}',
                    'data': {
                        '_token' : '{{ csrf_token() }}',
                        'category_group_id' : category
                    },
                    success: function (response) {

                        var data = $.parseJSON(response);

                        if (data.error) {
                            alert(data.message);
                        } else {

                            var option = '<option value="">-Select-</option>';
                            $('#menu').html(option);

                            $.each(data.menu_ids, function (i, v) {

                                var option = '<option value="'+i+'">'+v+'</option>';
                                $('#menu').append(option);

                            });
                            
                        }

                    }
                });

            });


    </script>



    @endsection
