@extends('header.layout.main')
@section('content')
<section>
  <div class="container">
       <div class="row">
        <center><h2>Booking</h2></center>
          <div class="col-lg-10">
    
      {!! Form::open(array('route'=>'booking.store','files'=>true))!!}
       
              
            @if($errors->all())
                <div class="alert alert-danger">

                 @foreach($errors->all() as $error)
                     <p>{{$error}}</p>
                 @endforeach

                </div> 
            @endif

              

              <div class="form-group">
                  <label for="exampleInputname">Client Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Client Name" required />
              </div>
             

            <div class="form-group">
              <label for="exampleInputaddress">Address</label>
              <textarea type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required /></textarea>
            </div>
            

            <div class="form-group">
              <label for="occassion">Occassion:</label>
                <select  name="occassion" id="occ" class="form-control" required />
                  <option value="">-Select-</option>
                  <option value="wedding">Wedding</option>
                  <option value="enagement">Enagement</option>
                  <option value="anniversity">Anniversity</option>
                  <option value="bartaman">Bartaman</option>
                  <option value="gufaa">Gufaa</option>
                  <option value="birthday">Birthday</option>
                  <option value="pasane">Pasane</option>
                  <option value="janku">Janku</option>
                  <option value="saradaa">Saradaa</option>
                  <option value="other">Other</option>
                </select>
            </div>

             <div class="form-group">
              <label  for="date">Event Date:</label>
                <input type="date" class="form-control" id="event" name="event" placeholder="Enter Event Date" required />
            </div>

            <div class="form-group">
              <label for="total">Total No. of People:</label>
                <select  name="total" id="total" class="form-control" required />
                  <option value="100">0-100</option>
                  <option value="200">100-200</option>
                  <option value="300">200-300</option>
                  <option value="400">300-400</option>
                  <option value="500">400-500</option>
                  <option value="600">500-600</option>
                  <option value="700">600-700</option>
                  <option value="800">700-800</option>
                  <option value="900">800-900</option>
                  <option value="1000">1000+</option>
                </select>
            </div>


              <div class="form-group">
                  <label  for="hall">Shift:</label>
                  <select  name="shift" id="shift" class="form-control" required />
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
                </select>
            </div>

            <div class="form-group">
              <label for="category">Category:</label>
                  <select  name="category" id="category" class="form-control" required />
                    <option value="">-Select-</option>
                      @foreach($data['category_group'] as $group)
                          <option value="{{ $group->id }}">{{ $group->name }}</option>
                          @endforeach
                  </select>
            </div>

            <div class="form-group">
              <label for="menu">Menu:</label>
                <select  name="menu" id="menu" class="form-control" required />
                  <option value="">-Select-</option>
                 </select>
            </div>


              <div id="item-wrapper" class="row" required />


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


            // load items by menu
            $('#menu').change(function () {

                var menu = $(this).val();
                $.ajax({
                    'method' : 'POST',
                    'url' : '{{ route('get-items-by-menu') }}',
                    'data': {
                        '_token' : '{{ csrf_token() }}',
                        'menu_id' : menu
                    },
                    success: function (response) {

                        var data = $.parseJSON(response);

                        if (data.error) {
                            alert(data.message);
                        } else {

                            $('#item-wrapper').html(data.html);

                        }

                    }
                });

            });

            // load halls by shift
            $('#shift').change(function () {

                var shift = $(this).val();
                $.ajax({
                    'method' : 'POST',
                    'url' : '{{ route('get-hall-by-shift') }}',
                    'data': {
                        '_token' : '{{ csrf_token() }}',
                        'shift_id' : shift
                    },
                    success: function (response) {

                        var data = $.parseJSON(response);

                        if (data.error) {
                            alert(data.message);
                        } else {

                            var option = '<option value="">-Select-</option>';
                            $('#hall').html(option);

                            $.each(data.hall_ids, function (i, v) {

                                var option = '<option value="'+i+'">'+v+'</option>';
                                $('#hall').append(option);

                            });

                        }

                    }
                });

            });

        });

        var total = 0;
        function calclateAmount($this) {
            if($this.checked){
                total += parseInt($($this).attr('attr-price'));
            }else{
                total -= parseInt($($this).attr('attr-price'));
            }

            document.getElementById('Totalcost').innerHTML = total * parseInt($('#total').val()) + " /-";
        }



    </script>



    @endsection
