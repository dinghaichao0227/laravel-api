<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advance;

class AdvanceController extends Controller
{
    // 查询接口
    public function getAdvanceList(Request $request) {
        $offset = ($request->page - 1) * $request->size;
        $limit = $request->size;
        $advance = Advance::offset($offset)
                    ->where("status", "!=", "-1")
                    ->limit($limit)
                    ->get();
        return [
            "code" => 200,
            "date" => $advance,
        ];
    }

    // 新增接口
    public function postAdvanceSave(Request $request) {
        $advance = new Advance;

        $advance->name = $request->name;
        $advance->phone_code = $request->phone_code;
        $advance->contact_time = $request->contact_time;
        $advance->status = "1";
        $advance->remarks = "";

        $advance->save();

        return [
            "code" => 200,
            "msg" => "OK"
        ];
    }

    // 更新接口
    public function postAdvanceUpdate(Request $request) {
        $advance = Advance::find($request->id);
        $advance->name = $request->name;
        $advance->phone_code = $request->phone_code;
        $advance->contact_time = $request->contact_time;
        $advance->status = $request->status;
        $advance->remarks = $request->remarks ? $request->remarks : "";
        $advance->save();
        return [
            "code" => 200,
            "msg" => "OK"
        ];
    }

    // 删除接口
    public function postAdvanceDelete(Request $request) {
        $advance = Advance::find($request->id);
        $advance->status = "-1";
        $advance->save();
        return [
            "code" => 200,
            "msg" => "OK"
        ];
    }
}
