@extends('admin.index')

    @section('home_content')
 
<div class="bg-white">
   <form action="/admin/Catagory/{{$catagory->id}}" method="POST">
    @csrf
    @method('PUT')
   <div class="form-group ">
        <input type="text"
        name="catagory"
        value="{{$catagory->catagory}}"
        class="bg-transparent  border-2 form-control input-lg "></div><br>
        <button type="submit" class="bg-primary w-100">Update </button>
    </form>

</div>


    @endsection


