<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('pages.customer');
    }
    public function register(Request $req)
    {
        Customer::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password

        ]);
        session()->put('customer', $req->email);
        return view('pages.shipping_detail');
    }
}
