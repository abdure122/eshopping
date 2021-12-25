<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ItemList;
use App\Models\CatagoryList;
use App\Models\Product_item;
use Illuminate\Http\Request;
use App\Models\Product_catagory;
use Illuminate\Support\Facades\Cache;

class PageController extends Controller
{
    public function index(Request $req)

    {
        return view('home');
    }
    public function item($id)
    {


        return view('pages.list_item')->with([
            'items' => ItemList::where('catagory_id', $id)->get()

        ]);
    }
    public function show_item($id)
    {
        return view('pages.show_item')->with('item', ItemList::find($id));
    }
    public function addToCart($id)
    {

        return 'add to cart';
    }
}
