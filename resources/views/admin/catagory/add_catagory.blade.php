@extends('admin.index')

    @section('home_content')
    
<div class="bg-white">
   
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
   <form action="/admin/catagory" method="POST">
    @csrf
    @method('POST')

    <div class="form-group w-75 m-sm-auto">
        <input type="text"
        name="catagory"
        placeholder="Add Catagory..."
        class="shadow p-4  border-2 border-primary form-control input-lg ">
        <div class="bg-danger">{{$error=null}}</div>
        @error('catagory')
            <div class="bg-danger">{{$message}}</div>
        @enderror<br>
        <button type="submit" class="bg-primary w-100">Add</button>
    </div>
    </form>

</div>

    @endsection


