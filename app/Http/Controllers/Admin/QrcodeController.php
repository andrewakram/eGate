<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GetSubCategoriesRequest;
use App\Http\Requests\Admin\QrcodeCreateRequest;
use App\Models\Category;
use App\Models\Qrcode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Yajra\DataTables\Facades\DataTables;

class QrcodeController extends Controller
{

    public function index()
    {
        $results = Qrcode::latest()->paginate(config('default_pagination'));
        return view('Admin.qrcodes.index', compact('results'));
    }

    public function getData()
    {

        $model = Qrcode::query();

        return DataTables::eloquent($model)
            ->addIndexColumn()
            ->addColumn('checkbox', function ($row) {
                $checkbox = '';
                $checkbox .= '<div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input selector checkbox" type="checkbox" value="' . $row->id . '" />
                                </div>';
                return $checkbox;
            })
            ->editColumn('category', function ($row) {
                if ($row->category) {
                    return "<b>" . $row->category->title . "</b>";
                } else {
                    return "-";
                }
            })
            ->editColumn('qr_code', function ($row) {
                return $row->qr_code;
            })
            ->editColumn('created_at', function ($row) {
                return Carbon::parse($row->created_at)->format("Y-m-d H:i:s");
            })
            ->addColumn('actions', function ($row) {
                $buttons = '';
//                $buttons .= '<a href="' . route('categories.edit', [$row->id]) . '" class="btn btn-primary btn-circle btn-sm m-1" title="'.trans('lang.edit').'">
//                            <i class="fa fa-edit"></i>
//                        </a>';
                return $buttons;
            })
            ->rawColumns(['actions', 'category', 'checkbox', 'qr_code', 'created_at'])
            ->make();

    }

    public function table_buttons()
    {
        return view('Admin.qrcodes.button');
    }

    public function create()
    {
        $categories = Category::whereNull('parent_id')->get();
        $subcategories = Category::where('parent_id', $categories->first()->id)->get();
        return view('Admin.qrcodes.create', compact('subcategories', 'categories'));
    }

    public function store(QrcodeCreateRequest $request)
    {
        for ($i = 0; $i < $request->num; $i++) {
            Qrcode::create([
                "qr_code" => bcrypt(time() . rand(1000000, 9999999) . $request->subcategory_id),
                "category_id" => $request->subcategory_id
            ]);
        }

        return redirect()->back()->with('message', trans('lang.added_s'));
    }

    //ajax
    public function getSubCats(GetSubCategoriesRequest $request)
    {
        return Category::whereParentId($request->category_id)->pluck('title', 'id');
    }


}
