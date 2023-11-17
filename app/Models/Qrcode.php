<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qrcode extends Model
{
    use HasFactory;


    protected $fillable = [
        'qr_code',
        'category_id',
        'status',
    ];

    public function getQrCodeAttribute(){
        return \SimpleSoftwareIO\QrCode\Facades\QrCode::size(50)->generate($this->attributes['qr_code']);
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

}
