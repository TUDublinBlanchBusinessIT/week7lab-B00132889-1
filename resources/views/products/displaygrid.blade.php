@extends('layouts.app')
@section('content')
@include('flash::message')
@include('products.displaygridnav')
    <div class='d-flex flex-wrap align-content-start bg-light'>
    @foreach($products as $product)
        <div class="p-2 border col-4 g-3 allcolours {{$product->colour}}">
            <div class="card text-center">
                <div class="card-header d-block"><h5 class="mx-auto d-block">{{ $product->name }} {{ $product->description }}</h5></div>
                <div class="card-body"><img style="width:65%;height:200px;" class="mx-auto d-block" src="{{ asset('/img/' . $product->image)}}"/></div>
                <div class="card-footer"><button id="addItem" type="button" class="btn btn-success mx-auto d-block addItem" value="{{$product->id}}">Add To Cart</button></div>
            </div>
        </div>
    @endforeach
    </div>
<script>
$(".bth,.addItem").click(function() {
	var total = parseInt($('#shoppingcart').text());
	var i=$(this).val();
	$('#shoppingcart').text(total);
	$.ajax({
		type: "get",
		url: "{{url('products/additem/')}}" + "/" + i,
		type: "GET",
		success: function(response) {
			  total=total+1;
			  $('#shoppingcart').text(response.total);
		  },
		  error: function() {
			  alert("problem communicating with the server");
      }
    });
});

$("#emptycart").click(function() { $.ajax({
    type: "get", url: "{{ url('products/emptycart')   }}",
    success: function() {
        $('#shoppingcart').text(0);
    },
    error: function() {
        alert("problem communicating with the server");
    }
  });
});

$("#colourselect").on('change', function() {
    var colour = $(this).find(":selected").val();
    if (colour=='All') {
        $('.allcolours').show();
    }
    else {
        $('.allcolours').hide();
        $('.'+colour).show();
    }
});
</script>
@endsection('content')