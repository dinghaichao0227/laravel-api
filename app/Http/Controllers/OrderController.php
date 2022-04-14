<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    // 查询接口
    public function getOrderList(Request $request) {
        $offset = ($request->page - 1) * $request->size;
        $limit = $request->size;
        $orders = Order::offset($offset)
                    ->where("status", "!=", "-1")
                    ->limit($limit)
                    ->get();
        return [
            "code" => 200,
            "date" => $orders,
        ];
    }

    // 新增接口
    public function postOrderSave(Request $request) {
        $order = new Order;

        $order->advance_id = $request->advance_id;
        $order->date = $request->date;
        $order->week = $request->week;
        $order->time = $request->time;
        $order->name = $request->name;
        $order->phone_code = $request->phone_code;
        $order->sex = $request->sex;
        $order->birthday = $request->birthday;
        $order->area = $request->area;
        $order->address = $request->address;
        $order->merchant = $request->merchant;
        $order->program = $request->program;
        $order->method = $request->method;
        $order->status = $request->status;
        $order->remarks = $request->remarks;

        $order->save();

        return [
            "code" => 200,
            "msg" => "OK"
        ];
    }

    // 更新接口
    public function postOrderUpdate(Request $request) {
        $order = Order::find($request->id);

        $order->advance_id = $request->advance_id;
        $order->date = $request->date;
        $order->week = $request->week;
        $order->time = $request->time;
        $order->name = $request->name;
        $order->phone_code = $request->phone_code;
        $order->sex = $request->sex;
        $order->birthday = $request->birthday;
        $order->area = $request->area;
        $order->address = $request->address;
        $order->merchant = $request->merchant;
        $order->program = $request->program;
        $order->method = $request->method;
        $order->status = $request->status;
        $order->remarks = $request->remarks;

        $order->save();

        return [
            "code" => 200,
            "msg" => "OK"
        ];
    }

    // 删除接口
    public function postOrderDelete(Request $request) {
        $order = Order::find($request->id);
        $order->status = "-1";
        $order->save();
        return [
            "code" => 200,
            "msg" => "OK"
        ];
    }
}
