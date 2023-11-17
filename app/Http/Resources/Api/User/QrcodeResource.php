<?php

namespace App\Http\Resources\Api\User;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrcodeResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
//        you  need to be sure that the extinsion imagick is already installed in your php version
//        $qrCode = QrCode::format('png')->size(200)->generate($this->qr_code);
        return
        [
            'id' => $this->id,
//            'qr_code' => $qrCode,
            'status' => $this->status,
            'created_at' => Carbon::parse($this->created_at)->format("Y-m-d H:i:s"),
        ];
    }
}
