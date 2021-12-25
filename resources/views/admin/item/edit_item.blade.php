@extends('admin.index')

    @section('home_content')
@foreach ($item as $item )


    <form action="/admin/item/{{$item->id}}" method="POST" enctype="multipart/form-data" class="">
        @csrf
        @method('PUT')
        <div class="form-group ">
            <select name="catagory" class="bg-transparent  border-2 form-control input-lg ">
                <option disabled="" selected="">Select catagory</option>
                @foreach (App\Models\CatagoryList::all() as $catagory )

                     <option value="{{$catagory->id}}">{{$catagory->catagory}}</option>


                @endforeach
            </select>
            @error('catagory')
            <div class=" alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group ">
        <input type="text"
        name="item_name"
        value="{{$item->item_name}}"
        class="bg-transparent  border-2 form-control input-lg ">
        @error('brand')
        <div class=" alert-danger">{{ $message }}</div>
    @enderror</div>
        <div class="form-group ">
        <input type="text"
        name="brand"
        value="{{$item->brand}}"
        class="bg-transparent  border-2 form-control input-lg ">
        @error('brand')
        <div class=" alert-danger">{{ $message }}</div>
    @enderror</div>
    <div class="form-group ">
        <input type="text"
        name="color"
        value="{{$item->color}}"
        class="bg-transparent  border-2 form-control input-lg ">
        @error('color')
        <div class=" alert-danger">{{ $message }}</div>
    @enderror</div>
    <div class="form-group ">
        <input type="text"
        name="condition"
        value="{{$item->condition}}"
        class="bg-transparent  border-2 form-control input-lg ">
        @error('condition')
        <div class=" alert-danger">{{ $message }}</div>
    @enderror</div>
            <div>
            <input type="text"
            name="price"
            value="${{$item->price}}"
            class="bg-transparent  border-2 form-control input-lg ">
            @error('price')
            <div class=" alert-danger">{{ $message }}</div>
        @enderror</div>
        <div class="form-group ">
            <input type="text"
            name="size"
            value="{{$item->size}}"
            class="bg-transparent  border-2 form-control input-lg ">
            @error('size')
            <div class=" alert-danger">{{ $message }}</div>
        @enderror</div>



    <div class=" form-group m-auto">
        <label for="" class="w-25 h-25 ">
        <img src="{{asset('images/'.$item->image->image_path)}}" alt="" width="200">
        <input type="file" class="hidden">
        @error('image')
        <div class=" alert-danger">{{ $message }}</div>
    @enderror
    </label>

    </div>
    <div class="form-group ">
    <button type="submit"
    class="uppercase w-40 bg-blue text-lg text-gray-100 font-extrabold py-2 px-8 rounded rounded-pill form-control">Update Item</button>
</div>
    </form>
    @endforeach
    @endsection


