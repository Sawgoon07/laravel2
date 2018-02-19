@extends('header.layout.main')
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
        <center><h2> User Profile</h2></center>
         
                <table class="table  table-striped">
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

                    @if (isset($data['bookings']) && $data['bookings']->count() > 0)

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
                                    <a class="btn btn-info btn-sm" href="{{ route('booking.details', $booking->id) }}">View</a>
                                    <a class="btn btn-primary btn-sm" href="{{ route('booking.edit', $booking->id) }}">Edit</a>
                                    <a class="btn btn-danger btn-sm" href="{{ route('booking.delete', $booking->id) }}" onclick="return confirm('Are you sure?');">Delete</a>
                                    <a class="btn btn-info btn-sm" href="{{ route('download-bill', $booking->id) }}">Bill</a>
                                </td>
                            </tr>
                        @endforeach


                        <tr>
                            <td colspan="11">
                                {!! $data['bookings']->links() !!}
                            </td>
                        </tr>

                        @else

                        <tr><td colspan="11">No data <found class=""></found></td></tr>

                    @endif


                </table>
            </div>
        
        </div>
    </div>


    </div>
@endsection