<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ItemList;
use App\Models\ItemImage;
use App\Models\CatagoryList;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.item.all_item');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.item.add_item');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'item_name' => 'required',
            'image' => 'required|image|max:10000|mimes:png,jpg,jpeg',
            'brand' => 'required',
            'color' => 'required',
            'condition' => 'required',
            'size' => 'required',
            'price' => 'required',
            'catagory' => 'required'

        ]);
        $request->flash();

        $image_path = uniqid() . '-' . $request->brand . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $image_path);
        ItemImage::create([
            'image_path' => $image_path,

        ]);
        $image_id = ItemImage::where('image_path', $image_path)->value('id');
        $campany_id = auth()->user()->id;


        ItemList::create([
            'campany_id' => $campany_id,
            'catagory_id' => $request->catagory,
            'image_id' => $image_id,
            'item_name' => $request->item_name,
            'condition' => $request->condition,
            'color' => $request->color,
            'brand' => $request->brand,
            'size' => $request->size,
            'price' => $request->price,


        ]);


        return back()->with('success','You have added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('admin.item.item_show')->with('items', ItemList::where('catagory', $id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.item.edit_item')
            ->with([
                'item' => ItemList::where('id', $id)->get(),

            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'item_name' => 'required',
            'image' => 'required|image|max:10000|mimes:png,jpg,jpeg',
            'brand' => 'required',
            'color' => 'required',
            'condition' => 'required',
            'size' => 'required',
            'price' => 'required',
            'catagory' => 'required'

        ]);

        $image_path = uniqid() . '-' . $request->brand . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $image_path);
        ItemImage::create([
            'image_path' => $image_path,

        ]);
        $image_id = ItemImage::where('image_path', $image_path)->value('id');
        $campany_id = auth()->user()->id;


        ItemList::create([
            'campany_id' => $campany_id,
            'catagory_id' => $request->catagory,
            'image_id' => $image_id,
            'item_name' => $request->item_name,
            'condition' => $request->condition,
            'color' => $request->color,
            'brand' => $request->brand,
            'size' => $request->size,
            'price' => $request->price,


        ]);


        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'delete';
    }
}
