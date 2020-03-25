<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Customers;
use App\Food_categories;
use App\Food_details;
use App\Order_details;
use App\Payment_method;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function foodCategory()
    {
        $foodCategory = Food_categories::all();
        return view('foodCategory', compact('foodCategory'));
    }

    public function foodList()
    {
        $foodLists = Food_details::all();
        return view('foodList', compact('foodLists'));
    }

    public function orderList()
    {
        $orderLists = Order_details::all();
        return view('orderList', compact('orderLists'));
    }

    public function paymentMethod()
    {
        $paymentMethods = Payment_method::all();
        return view('paymentMethod', compact('paymentMethods'));
    }

    public function customer()
    {
        $customers = Customers::all();
        return view('customer', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
