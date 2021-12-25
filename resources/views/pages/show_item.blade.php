@extends('home')
@section('detail_view')

<div class="card mb-3 justify-content-center d-block border-bottom border-primary"  >


    <div class="row no-gutters">
      <div class="col-md-4 d-inline-blockbg-white justify-content-center ">
        <img src="{{asset('images/'.$item->image->image_path)}}" alt="..." class="h-auto " width="250">
      </div>
      <div class="col-md-8 h-100 bg-light">
        <div class="card-body ml-sm-3">
          <h3 class="card-title text-right "><span class="font-weight-bold ">Brand:</span>{{$item->brand}}</h3><br>
          <span class="text-warning"><i class="fa fa-star "></i><i class="fa fa-star "></i><i class="fa fa-star "></i><i class="fa fa-star "></i></span> <br><br>

          <div class="d-sm-inline">

              </div><span class="text-warning font-weight-bolder font-italic text-right ">${{$item->price}}</span>

              <form action="/cart" method="GET">
                   Quantity<input name="quantity" type="text" value="1" class="input w-25 font-weight-bold"><br>
<input type="hidden" class="hidden " value="{{$item->id}}" name="id">
         <button  type="submit"
            class=" justify-content-center bg-warning font-weight-bolder text-sm-right">
             <i class="fa fa-cart-plus ">Add To Cart</i>
           </button><br><br>
        </form>
           <p class="card-text"><span class="font-weight-bold text-right  ">Color:</span>{{$item->color}}</p>

          <p class="card-text"><span class="font-weight-bold text-right ">Condition:</span>{{$item->condition}}</p>
          <p class="card-text"><span class="font-weight-bold text-right  ">Availability:</span> In Stock</p>
          <p class="card-text"><span class="font-weight-bold text-right  ">Catagory:</span>{{$item->catagory->catagory}}</p>
          <p class="card-text"><span class="font-weight-bold text-right  ">Size:</span>{{$item->size}}</p>


          <p class="card-text"><small class="text-muted"></small></p>
        </div>
      </div>
    </div>

  </div>


@endsection
