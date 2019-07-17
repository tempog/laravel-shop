<?php

namespace App\Http\Controllers;

use App\Exceptions\CouponCodeUnavailableException;
use App\Models\CouponCode;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CouponCodesController extends Controller
{
    /**
     * @param $code
     * @return mixed
     * @throws CouponCodeUnavailableException
     */
    public function show($code)
    {
        if (! $record = CouponCode::where('code', $code)->first()) {
            throw new CouponCodeUnavailableException('优惠劵不存在');
        }

        $record->checkAvailable();

        return $record;
    }
}
