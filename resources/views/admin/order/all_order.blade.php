@extends('admin.index')

@section('home_content')
  <fieldset class="bg-white">
    <legend class="text-warning font-weight-bolder text-center ">Ordered Item</legend>

    <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Customer Name</th>
              <th>Email</th>
              <th>Item-Name</th>
              <th>Quantity</th>
              <th>Total Price</th>
              <th>Action</th>


            </tr>
          </thead>
          <tbody>
            @foreach (App\Models\OrderItem::all() as $ordered )

            <tr>
              <td>{{$ordered->id}}</td>

              <td class=" ">
                <div class="bd-highlight">
                  {{$ordered->customer->name}}
                </div>
              </td>
              <td >
                <div class="bd-highlight">
                    {{$ordered->customer->email}}

                </div>
              </td>
              <td >
                <div class="bd-highlight">

                    {{$ordered->item->item_name}}

                </div>
              </td>
              <td >
                <div class="bd-highlight">

                    {{$ordered->quantity}}

                </div>  </td>
                <td>
                    <td>
                        <div class="bd-highlight">
        
                            {{$ordered->quantity*$ordered->item->price}}
        
                        </div>  </td>
                        <td >
                    <div class="bd-highlight d-inline-flex">
               <a href="#" class="bg-info text-white"><i class="fa fa-arrow-right">Show </i></a>
               <form action="/admin/catagory/{{$catagory->id}}">
                @csrf
            @method('DELETE')
            <a type="submit" href="/admin/catagory/{{$catagory->id}}" class="bg-danger text-white">Delete</a>

        </form>
               <a href="/admin/catagory/{{$catagory->id}}/edit" class="bg-primary text-white"><i class="fa fa-user-edit">Edit </i></a>

                </div>


                  </td>





               </tr> @endforeach




          </tbody>
        </table>
      </div>
</fieldset>
@endsection

