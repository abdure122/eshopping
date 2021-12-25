  @extends('home')
@section('item_list')
        <fieldset class="border bg-white">
            <legend class="text-center font-weight-bolder text-bold text-capitalize text-warning">  Latest Item</legend>
        <div class=" d-block text-center">
        @foreach (App\Models\ItemList::where('catagory_id',$catagory)->get() as $item )
                <a href="/userpage/product/{{$catagory}}/{{$item->id}}"
                    class="justify-content-center font-weight-bolder text-primary">
                    {{$item->item}} </a><br><br>

            @endforeach
          </div>
          </fieldset>
        @endsection
@section('content_view')
<div class="row">
    @foreach (App\Models\ItemList::all() as $product)
<div class="col-sm-4   pt-sm-3 m-auto ">
		<div class="bg-white  text-sm-center ">
			<img src="{{asset('images/'.$product->image_path)}}" width="200">
			<h5 class="text-warning font-weight-bolder font-italic">${{$product->price}}</h5>
          <h5 class="text-warning font-weight-bolder font-italic">{{$product->brand}}</h5>
            <p href="/userpage/show/{{$product->id}}"
                class="justify-content-center ">
                {{$product->description}}  <a href="/userpage/item/{{$product->id}}"
                    class="justify-content-center  text-primary">
                     More...</a><br></p>

                  <a href="/cart/{{$product->id}}"
                    class="justify-content-center ">
                   <i class="fa fa-cart-plus "></i> Add To Cart</a>

		</div>
	</div>
    @endforeach
</div>




@endsection
