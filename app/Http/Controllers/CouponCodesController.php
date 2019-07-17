<?php

namespace App\Http\Controllers;

use App\Models\CouponCode;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CouponCodesController extends Controller
{
    /**
     * 展示优惠劵
     *
     * @param $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($code)
    {
        if (! $record = CouponCode::where('code', $code)->first()) {
            abort(404);
        }

        if (! $record->enabled) {
            abort(404);
        }

        if ($record->total - $record->used <= 0) {
            return response()->json(['msg' => '该优惠劵已被兑完'], 403);
        }

        if ($record->not_before && $record->not_before->gt(Carbon::now())) {
            return response()->json(['msg' => '该优惠劵现在还不能使用'], 403);
        }

        if ($record->not_after && $record->not_after->lt(Carbon::now())) {
            return response()->json(['msg' => '该优惠劵已过期'], 403);
        }

        return $record;
    }
}
