<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Routing\Controller;
use Yajra\DataTables\Facades\DataTables;

class SubCategoryController extends Controller
{

    public function index()
    {
        $results = Category::latest()->paginate(config('default_pagination'));
        return view('Admin.subcategories.index', compact('results'));
    }

    public function getData()
    {

        $model = Category::query();
        $model->whereNotNull('parent_id');
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
            ->editColumn('category', function ($row) {
                if ($row->category) {
                    return "<b>" . $row->category->title . "</b>";
                } else {
                    return "-";
                }
            })
            ->rawColumns(['actions','checkbox','category'])
            ->make();

    }

    public function table_buttons()
    {
        return view('Admin.subcategories.button');
    }

}
