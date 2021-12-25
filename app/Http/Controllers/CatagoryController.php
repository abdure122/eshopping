<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatagoryList;
use App\Http\Requests\CatagoryRequest;
class CatagoryController extends Controller
{
    /**you have added successfully
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        // $this->authorizeResource(CatagoryList::class, 'Catagory');
    }
    public function index()
    {
        return view('admin.catagory.all_catagory');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.catagory.add_catagory');
    }

    /**  
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CatagoryRequest $req)
    {
       
        CatagoryList::create($req->all());
                return back()->with('success','you have added successfully');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.catagory.show_catagory');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.catagory.edit_catagory')->with('catagory', CatagoryList::find($id));
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
        CatagoryList::where('id', $id)
            ->update([
                'catagory' => $request->catagory
            ]);
        return back()->with('success','you have updated successfully');
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
