@extends('header.layout.main')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <table class="table table-striped">

                    <tr>
                        <th width="20%">Client Name</th>
                        <td>{{ $data['row']->name }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $data['row']->address }}</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>{{ $data['row']->categoryGroup->name }}</td>
                    </tr>
                    <tr>
                        <th>Occassion</th>
                        <td>{{ $data['row']->occassion }}</td>
                    </tr>
                    <tr>
                        <th>Total Peoples</th>
                        <td>{{ $data['row']->total }}</td>
                    </tr>
                    <tr>
                        <th>Shift</th>
                        <td>{{ $data['row']->shift->name }}</td>
                    </tr>
                    <tr>
                        <th>Hall</th>
                        <td>{{ $data['row']->hall->name }}</td>
                    </tr>
                    <tr>
                        <th>Menu</th>
                        <td>{{ $data['row']->menu->name }}</td>
                    </tr>
                    <tr>
                        <th>Event Date</th>
                        <td>{{ $data['row']->event }}</td>
                    </tr>


                    <tr>
                        <th colspan="2">Items</th>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>Price</td>
                    </tr>

                    @php $total = 0; @endphp
                    @foreach($data['items'] as $item)

                        <tr>
                            <td>{{ $item->item->name }}</td>
                            <td>{{ $item->item->price }}</td>
                        </tr>

                        @php $total = $total + (int) $item->item->price @endphp
                        @endforeach


                    <tr>
                        <td><strong>Total</strong></td>
                        <td>{{ (int) $data['row']->total * $total }}</td>
                    </tr>

                </table>

            </div>

        </div>
    </div>


    </div>
@endsection