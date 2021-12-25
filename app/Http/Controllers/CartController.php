<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ItemList;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use  Illuminate\Session\Store\set;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.cart_item');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addItem(Request $req)
    {

        $array = session('items');
        if (session()->has('items') && array_search($req->id, $array)) {
            return back();
        } else {
            session()->push('items', $req->id);
            session()->push('quantity', $req->quantity);
        }
        return view('pages.cart_item');

        // $index = array_search(7, $array);
        // unset($array[$index]);
        // session()->put('items', $array);
        // return session('items');




        // foreach (session('items') as $key => $value) {
        //     if ($index !== false) {
        //         array_splice($items, $index, 1);
        //         # code...
        //     } else {
        //         $items[] = $id;
        //     }
        // }

        // $item = 7;
        //



        // foreach (session('items') as $key => $value) {
        //     if ($value == $item) {
        //         unset($items[$key]);
        //     }
        // }
        // session()->set('items', $items);

        // session::forget('items');
        // session()->put('items', $sessions);
        // dd(session('items'));



    }
    public function delete($id)
    {
        $array = session()->get('items');
        $index = array_search($id, $array);
        unset($array[$index]);
        Session::put('items', $array);
        $array1 = session()->get('quantity');
        $index1 = array_search($id, $array1);
        unset($array1[$index1]);
        Session::put('quantity', $array1);
        return back();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        cache()->put('items', ItemList::where('id', $id)->get());
        return view('pages.cart_item_show')->with('items', cache()->get('item'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.cart_item')->with('item',ItemList::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
