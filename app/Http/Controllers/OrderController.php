<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{

    public function show(Order $order){

        $items = json_decode($order->content);

        return view('orders.show', compact('order', 'items'));
    }


    public function pay(Order $order, Request $request){
        $payment_id = $request->get('payment_id');

        $response = Http::get("https://api.mercadopago.com/v1/payments/$payment_id" . "?access_token=APP_USR-2966754438242803-052115-15da96c087a2fc4d07794f08fe496606-763006654");

        $response = json_decode($response);

        $status = $response->status;

        if($status == 'approved'){
            $order->status = 2;
            $order->save();
        }

        return redirect()->route('orders.show', $order);
    }
}
