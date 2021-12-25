@extends('home')
@section('content_view')
<fieldset class="justify-content-sm-center">

    <legend class="text-center font-weight-bolder text-bold text-capitalize text-warning">  Latest Item</legend>
    @foreach (  $items->chunk(3) as $item)

    <div class="row justify-content-md-around">
     @foreach ($item as $product)


        <div class="col-sm-3  mr-sm-2 mb-sm-4 ">
            <div class="bg-white  text-sm-center h-100 w-100 m-sm-auto justify-content-sm-center">
                <img src="{{asset('images/'.$product->image->image_path)}}" width="150" height="200">
                <h5 class="text-warning font-weight-bolder font-italic">{{$product->price}}</h5>
              <h5 class="text-warning font-weight-bolder font-italic">{{$product->brand}}</h5>
                <p
                    class="justify-content-center ">
                    {{$product->item_name}}  <a href="/userpage/show_item/{{$product->id}}"
                        class="justify-content-center  text-primary">
                         More...</a><br></p>

                      <a href="/cart/show/{{$product->id}}"
                        class="justify-content-center bg-warning font-weight-bolder text-sm-right ">
                       <i class="fa fa-cart-plus "></i> Add To Cart</a>

            </div>
        </div>
        @endforeach

    </div>
@endforeach


  </fieldset>
@endsection
