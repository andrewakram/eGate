<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\QrcodeStatusCheckRequest;
use App\Http\Requests\Api\QrcodeStatusUpdateRequest;
use App\Http\Requests\Api\User\BoxDetailsRequest;
use App\Http\Requests\Api\User\executePayRequest;
use App\Http\Requests\Api\User\SaveSizesDataRequest;
use App\Http\Requests\Api\User\UserRequest;
use App\Http\Resources\Api\User\BoxCategoriesFinalResource;
use App\Http\Resources\Api\User\BoxFinalResource;
use App\Http\Resources\Api\User\BoxResource;
use App\Http\Resources\Api\User\CategoryResource;
use App\Http\Resources\Api\User\GiftResource;
use App\Http\Resources\Api\User\MainCategoryResource;
use App\Http\Resources\Api\User\QrcodeResource;
use App\Models\Box;
use App\Models\BoxCategory;
use App\Models\Gift;
use App\Models\GiftHistory;
use App\Models\GiftMoneyDetail;
use App\Models\MainCategory;
use App\Models\Order;
use App\Models\Product;
use App\Models\Qrcode;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Arr;

class QrcodeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function qrcodeStatusUpdate(QrcodeStatusUpdateRequest $request)
    {
        $request->validated();

        Qrcode::whereId($request->id)->update(['status' => $request->status]);
        return msg(true, trans('lang.data_display_success'), success());
    }

    public function qrcodeStatusCheck(QrcodeStatusCheckRequest $request)
    {
        $request->validated();

        $result = new QrcodeResource(Qrcode::whereId($request->id)->first());
        return msgdata(true, trans('lang.data_display_success'),$result, success());
    }


}

