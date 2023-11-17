<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Qrcode;
use App\Models\User;

class HomeController extends Controller
{

    public function index()
    {
        $data['users'] = User::count();
        $data['categories'] = Category::count();
        $data['qr_codes'] = Qrcode::count();

        return view('Admin.index',compact('data'));
    }


    public function translate($word){
        return trans('lang.'.$word);
    }
}
