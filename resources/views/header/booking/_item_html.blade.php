<div class="row">

<div class="col-xs-12 col-sm-12">

	@if (isset($item_groups))
        @foreach($item_groups as $group)

           <div class="col-md-3 .col-md-offset-3">

                <h3>{{ $group['item_group']?$group['item_group']->name:'' }}</h3> <br>
                @foreach($group['items'] as $item)
                    <input type="checkbox" name="item[]" value="{{ $item->id }}"
                           {!! isset($booking_items) && in_array($item->id, $booking_items)?"checked":"" !!}
                           attr-price="{{ $item->price }}"
                           onClick="calclateAmount(this);">{{ $item->name }}<br>
                    @endforeach
            </div>


            @endforeach
        @endif

</div>
</div>
