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
            <center><h2>User Booking List</h2></center>
          </div>
          <br>

          <table class="table table-bordered">
              <tr>
                  <th>S.No</th>
                  <th>Client Name</th>
                  <th>Address</th>
                  <th>Category</th>
                  <th>Occassion</th>
                  <th>Total Peoples</th>
                  <th>Shift</th>
                  <th>Hall</th>
                  <th>Menu</th>
                  <th>Event Date</th>
                  <th>Action</th>
              </tr>

              

                  @foreach($data['bookings'] as $key => $booking)
                      <tr>
                          <td>{{$key+1}}</td>
                          <td>{{ $booking->name }}</td>
                          <td>{{ $booking->address }}</td>
                          <td>{{ $booking->categoryGroup->name }}</td>
                          <td>{{ $booking->occassion }}</td>
                          <td>{{ $booking->total }}</td>
                          <td>{{ $booking->shift->name }}</td>
                          <td>{{ $booking->hall->name }}</td>
                          <td>{{ $booking->menu->name }}</td>
                          <td>{{ $booking->event }}</td>
                          <td>

                            <a class="btn btn-info" href="{{ route('book.show', $booking->id) }}">View</a>
                            <a class="btn btn-danger" href="{{ route('book.delete', $booking->id) }}" onclick="return confirm('Are you sure?');">Delete</a>
                          </td>
                      </tr>
                  @endforeach
            
          </table>
      </div>
</div>



@endsection