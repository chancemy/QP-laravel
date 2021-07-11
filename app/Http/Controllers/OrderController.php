<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    function __construct()
    {
        $this->index = 'admin.order.index';
        $this->edit = 'admin.order.edit';
        $this->create = 'admin.order.create';
    }
    public function index()
    {
        $orders = Order::get();
        return view($this->index, compact('orders'));
    }
    public function edit($id)
    {
        $record = Order::find($id);
        return view($this->edit, compact('record'));
    }
    public function update(Request $request, $id)
    {
        $old_record = Order::find($id);
        $old_record->is_paid = $request->is_paid;
        $old_record->shipping_status_id = $request->shipping_status_id;
        $old_record->order_status_id = $request->order_status_id;
        $old_record->save();
        return redirect('/admin/order')->with('message', '編輯成功');
    }
    public function delete($id)
    {
        $old_record = Order::find($id);
        $old_Product_details = OrderDetail::where('order_id', $old_record->id)->get();

        foreach ($old_Product_details as $old_Product_detail) {

            $old_Product_detail->delete();
        }
        $old_record->delete();

        return redirect('/admin/order')->with('message', '刪除成功');
    }
}
