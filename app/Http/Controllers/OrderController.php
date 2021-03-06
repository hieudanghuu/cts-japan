<?php

namespace App\Http\Controllers;

use App\Order;
use App\Post_tran;
use App\Product_Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function all_show(Order $order, $id)
    {
        $order = Order::findOrFail($id);
        $product_orders = $order->product_order;
        $user = $order->user;
        return view('dashboard.show_all', compact('order', 'product_orders', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $product_order = $order->product_order;
        $order->delete();
        $product_order->delete();
        Session::flash('success', 'xóa thành công');
        return redirect()->back();
    }

    public function show_deletad_at()
    {
        $orders = Order::onlyTrashed()->paginate(10);
        return view('dashboard.deleteForm.order', compact('orders'));
    }

    public function restore($id)
    {
        Order::withTrashed()->find($id)->restore();
        Session::flash('success', 'Khôi phục thành công');
        return redirect()->route('dashboard.table3');
    }

    public function forceDelete($id)
    {
        Order::withTrashed()->find($id)->forceDelete();
        Session::flash('success', 'Xóa vĩnh viễn thành công');
        return redirect()->back();
    }
}
