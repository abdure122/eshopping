@extends('home')
@section('detail_view')
<fieldset class="justify-content-sm-around bg-white mb-sm-5 shadow-lg p-sm-5">

    <legend class="text-center font-weight-bolder text-bold text-capitalize text-warning">  Cart Item</legend>
        @if (session()->has('items')&& session()->has('quantity'))
        <?php  $i=1;?>

    <div class="">


            <div class="card-body ">
                <table class="table table-bordered text-center">
                  <thead class="text-weight-bold font-weight-bold bg-warning">
                    <tr>

                      <td>campany Name</td>
        <td> Image</td>
                       <th>Item-Name</th>
                      <th>Brand</th>
                      <td> Price</td>
                      <th>Quantity</th>
                      <td> Total Price</td>

                      <th style="width: 40px">Action</th>

                    </tr>
                  </thead>

                  @foreach (session('items') as $id )

                  @if ($item=App\Models\ItemList::find($id))

                  <tbody class=" table-borderless">
                   <tr>

                      <td>{{$item->campany->campany_name}}</td>
                      <td><img src="{{asset('images/'.$item->image->image_path)}}" alt="" width="50" height="50"></td>

                      <td>{{$item->item_name}}</td>


                      <td class=" ">
                        <div class="bd-highlight">
                          {{$item->brand}}
                        </div>
                      </td>
                      <td class=" ">
                        <div class="bd-highlight">
                          {{$item->price}}
                        </div>
                      </td>
                    </td>

                    <td class=" ">
                        <div class="bd-highlight">

                    {{session('quantity')[$i]}}
                    <?php $i++; ?>
                        </div>
                      </td>
                      <td class=" ">
                        <div class="bd-highlight">
                          {{$item->price}}
                        </div>
                      </td>

                      <td>

                   <a href="/cart/delete/{{$item->id}}"  class="text-center font-weight-bolder bg-danger text-white"> @method('delete') Delete</a>

                     <a href="/admin/item/{{$item->id}}/edit" class="text-center font-weight-bolder  text-white"><i class="fas fa-edit bg-primary">Edit</i> </a>


                            </td>


                       </tr>




                  </tbody>

                  @endif

                          @endforeach
                </table>
                <div class="  border p-4  mt-sm-4">
                    <label for="" class="w-100 highlight bg-light border-dark justify-content-around input-lg">Cart sub Total <span class="text-end text-sm-right text-sm-center">999999</span></label>
                    <label for="" class="w-100 highlight bg-light border-dark ">Eco Tax</label>
                    <label for="" class="w-100 highlight bg-light border-dark ">Total</label>


                </div>
              </div>


    </div>
@endif

<div class="text-left">
<a href="/customer" class=" bg-primary px-sm-5 py-sm-2 rounded-pill shadow p-4"> CHECKOUT</a>
</div>
  </fieldset>
@endsection
