<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function customer($id, $name, $address)
    {
        return view('activity4.customer', compact('id', 'name', 'address'));
    }

    public function item($no, $name, $price)
    {
        return view('activity4.item', compact('no', 'name', 'price'));
    }

    public function order($custId, $custName, $orderNo, $date)
    {
        return view('activity4.order', compact('custId', 'custName', 'orderNo', 'date'));
    }

    public function orderDetails($transNo, $orderNo, $itemId, $name, $price, $qty)
    {
        return view('activity4.orderDetails', compact('transNo', 'orderNo', 'itemId', 'name', 'price', 'qty'));
    }
}
