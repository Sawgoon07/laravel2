<!DOCTYPE html>

<html>
<head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
</head>
<body>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
              <center><h2>User List</h2></center>
            </div>
            <br>

            <table class="table  table-bordered">
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
                        </tr>
                    @endforeach

               

            </table>
        </div>
    </div>
</body>
</html>



