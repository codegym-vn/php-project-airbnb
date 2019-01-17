<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function index()
    {
        return Customer::get();
    }

    public function show($id)
    {
        return Customer::find($id);
    }

    public function customer(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->password = $request->password;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->save();

    }







}
