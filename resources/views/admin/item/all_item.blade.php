
@extends('admin.index')
@section('home_content')
<fieldset class="bg-white w-100">
    <legend class="text-warning font-weight-bolder text-center ">Posted Item</legend>

    <div class="card-body ">
        <table class="table table-bordered text-center">
          <thead class="text-weight-bold font-weight-bold bg-warning">
            <tr>
              <th style="width: 10px">#</th>
              <td>campany Name</td>

              <td> Image</td>
               <th>Item-Name</th>
              <th>Brand</th>
              <td> Price</td>
              <th>color</th>
              <td> condition</td>
              <td> Posted Date</td>
              <th style="width: 40px">Action</th>

            </tr>
          </thead>
          <tbody >
            @foreach(App\Models\ItemList::orderBy('updated_at', 'DESC')->get() as $item)

            <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->campany->campany_name}}</td>
              <td><img src="{{asset('images/'.$item->image->image_path)}}" alt="" width="150"></td>

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
              <td class=" ">
                <div class="bd-highlight">
                  {{$item->color}}
                </div>
              </td>
              <td class=" ">
                <div class="bd-highlight">
                  {{$item->condition}}
                </div>
              </td>
              <td class=" ">
                <div class="bd-highlight">
                  {{$item->created_at}}
                </div>
              </td>
              <td>

           <a href="/admin/item/{{$item->id}}"  class="text-center font-weight-bolder bg-danger text-white"> @method('delete') Delete</a>

             <a href="/admin/item/{{$item->id}}/edit" class="text-center font-weight-bolder  text-white"><i class="fas fa-edit bg-primary">Edit</i> </a>


                    </td>


               </tr> @endforeach




          </tbody>
        </table>
      </div>
</fieldset>
@endsection


