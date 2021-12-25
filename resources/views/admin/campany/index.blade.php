@extends('admin.index')

@section('home_content')
  <fieldset class="bg-white">
    <legend class="text-warning font-weight-bolder text-center ">Ordered Item</legend>

    <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Logo</th>
              <th>Campany-Name</th>
              <th>Campany-Email</th>
              
              <th>Action</th>


            </tr>
          </thead>
          <tbody>
            @foreach (App\Models\User::all() as $campany )

            <tr>
              <td>{{$campany->id}}</td>

             <td>
                <div class="bd-highlight">
                    <img src="{{asset('logos/'.$campany->Logo)}}" width="100" alt=""> 

                </div>
              </td>
              <td class=" ">
                <div class="bd-highlight">
                  {{$campany->campany_name}}
                </div>
              </td>
             
                <td class=" ">
                    <div class="bd-highlight">
                      {{$campany->email}}
                    </div>
                  </td>
                 
          <td>
                    <div class="bd-highlight d-inline-flex">
               <a href="#" class="bg-info text-white"><i class="fa fa-arrow-right">Show </i></a>
               <form action="/admin/campany/{{$campany->id}}">
                @csrf
            @method('DELETE')
            <a type="submit" href="/admin/campany/{{$campany->id}}" class="bg-danger text-white">Delete</a>

        </form>
               <a href="/admin/campany/{{$campany->id}}/edit" class="bg-primary text-white"><i class="fa fa-user-edit">Edit </i></a>

                </div>


                  </td>





               </tr> @endforeach




          </tbody>
        </table>
      </div>
</fieldset>
@endsection

