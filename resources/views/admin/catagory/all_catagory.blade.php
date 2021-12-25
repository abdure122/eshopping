@extends('admin.index')

@section('home_content')
  <fieldset class="bg-white">
    <legend class="text-warning font-weight-bolder text-center ">All Catagory</legend>

    <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Catagory Name</th>
              <th>#Posted Item</th>
              <th>#New Order Item</th>
               <th>#Sold Item</th>

               <th>Action</th>


            </tr>
          </thead>
          <tbody>
            @foreach (App\Models\CatagoryList::all() as $catagory )

            <tr>
              <td>{{$catagory->id}}</td>

              <td class=" ">
                <div class="bd-highlight">
                  {{$catagory->catagory}}
                </div>
              </td>
              <td >
                <div class="bd-highlight">
             {{$catagory->items->count('catagory_id',$catagory->id)}}

                </div>
              </td>
              <td >
                <div class="bd-highlight">
                    0

            {{-- {{$catagory->orders->count(['item_id'=>$catagory->item->id,'status'=>'wait'])}} --}}

                </div>
              </td>
              <td >
                <div class="bd-highlight">
0
            {{-- {{$catagory->orders->count(['item_id'=>$catagory->item->id,'status'=>'sold'])}} --}}

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

