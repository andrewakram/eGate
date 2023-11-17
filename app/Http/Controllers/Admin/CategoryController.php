<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Grimzy\LaravelMysqlSpatial\Types\LineString;
use Grimzy\LaravelMysqlSpatial\Types\Point;
use Grimzy\LaravelMysqlSpatial\Types\Polygon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{

    public function index()
    {
        $results = Category::latest()->paginate(config('default_pagination'));
        return view('Admin.categories.index', compact('results'));
    }

    public function getData()
    {

        $model = Category::query();
        $model->whereNull('parent_id');

        return DataTables::eloquent($model)
            ->addIndexColumn()
            ->addColumn('checkbox', function ($row) {
                $checkbox = '';
                $checkbox .= '<div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input selector checkbox" type="checkbox" value="' . $row->id . '" />
                                </div>';
                return $checkbox;
            })
            ->addColumn('actions', function ($row){
                $buttons = '';
//                $buttons .= '<a href="' . route('categories.edit', [$row->id]) . '" class="btn btn-primary btn-circle btn-sm m-1" title="'.trans('lang.edit').'">
//                            <i class="fa fa-edit"></i>
//                        </a>';
                return $buttons;
            })
            ->rawColumns(['actions','checkbox'])
            ->make();

    }

    public function table_buttons()
    {
        return view('Admin.categories.button');
    }

}
