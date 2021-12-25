@extends('admin.index')

    @section('home_content')

    <form action="/admin/item" method="POST" enctype="multipart/form-data" class="">
        @csrf
        <div class="form-group ">
            <select name="catagory_id" class="bg-transparent  border-2 form-control input-lg ">
                <option disabled="" selected="">Select catagory</option>
                @foreach (App\Models\CatagoryList::all() as $catagory )

                     <option value="{{$catagory->id}}"
                        @if ($catagory->id==old('catagory_id'))
                            selected
                        @endif>{{$catagory->catagory}}</option>


                @endforeach
            </select>
            @error('catagory_id')
            <div class=" alert-danger">{{ $message }}</div>
        @enderror
    </div>
   

    <div class="form-group ">
        <input type="text"
        name="item_name"
        value="{{old('item_name')}}"
        placeholder="enter item Name..."
        class="bg-transparent  border-2 form-control input-lg ">
        @error('brand')
        <div class=" alert-danger">{{ $message }}</div>
    @enderror</div>
        <div class="form-group ">
        <input type="text"
        name="brand"
        value="{{old('brand')}}"
        placeholder="enter Brand..."
        class="bg-transparent  border-2 form-control input-lg ">
        @error('brand')
        <div class=" alert-danger">{{ $message }}</div>
    @enderror</div>
    <div class="form-group ">
        <input type="text"
        name="color"
        value="{{old('color')}}"
        placeholder="enter color..."
        class="bg-transparent  border-2 form-control input-lg ">
        @error('color')
        <div class=" alert-danger">{{ $message }}</div>
    @enderror</div>
    <div class="form-group ">
        <input type="text"
        name="condition"
        value="{{old('condition')}}"
        placeholder="enter condition..."
        class="bg-transparent  border-2 form-control input-lg ">
        @error('condition')
        <div class=" alert-danger">{{ $message }}</div>
    @enderror</div>
            <div>
            <input type="text"
            name="price"
            value="{{old('price')}}"
            placeholder="$ Price"
            class="bg-transparent  border-2 form-control input-lg ">
            @error('price')
            <div class=" alert-danger">{{ $message }}</div>
        @enderror</div>
        <div class="form-group ">
            <input type="text"
            name="size"
            value="{{old('size')}}"
            placeholder="enter size..."
            class="bg-transparent  border-2 form-control input-lg ">
            @error('size')
            <div class=" alert-danger">{{ $message }}</div>
        @enderror</div>



    <div class="bg-gray-lighter form-group">
        <label for="" class="w-44 flex-col form-control px-2 py-3 shadow-lg bg-white-rounded-lg cursor-pointer border-blue">
        Image <input type="file" name="image" value="{{old('image')}}"  > </label>
        @error('image')
        <div class=" alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group ">
    <button type="submit"
    class="uppercase mt-15 bg-blue text-lg text-gray-100 font-extrabold py-2 px-8 rounded rounded-pill form-control">Submit Post</button></div>
    </form>

    @endsection


