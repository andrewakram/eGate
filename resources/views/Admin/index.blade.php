@extends('layout.layout')

@section('title')
    {{__('lang.Dashboard')}}
@endsection
@section('css')
    <link href="{{asset('dashboard//plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
    <style>
        .bootstrap-datetimepicker-widget {
            display: contents !important;
        }
    </style>
@endsection
@section('header')

    <!--begin::Heading-->
    <h1 class="text-dark fw-bolder my-0 fs-2">{{trans('lang.Dashboard')}} </h1>
    <!--end::Heading-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb fw-bold fs-base my-1">
    </ul>
    <!--end::Breadcrumb-->
@endsection
@section('content')
    <div id="kt_content_container" class=" align-items-start container-xxl">
        <!--begin::Post-->
        <div class="row g-5 g-xl-12">

                <div class="col-xl-4">
                    <!--begin::Statistics Widget 5-->
                    <a href="#" class="card bg-body hoverable card-xl-stretch mb-xl-8 ">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
                            <i class="fa fa-user-plus text-info fa-3x"></i>
                            <div class="text-info fw-bolder fs-2 mb-2 mt-5">{{$data['users']}}</div>
                            <div class="fw-bold text-info fs-2">{{__("lang.users")}}</div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>

                <div class="col-xl-4">
                    <!--begin::Statistics Widget 5-->
                    <a href="#" class="card bg-body hoverable card-xl-stretch mb-xl-8 ">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
                            <i class="fa fa-layer-group text-info fa-3x"></i>
                            <div class="text-info fw-bolder fs-2 mb-2 mt-5">{{$data['categories']}}</div>
                            <div class="fw-bold text-info fs-2">{{__("lang.categories")}}</div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>

                <div class="col-xl-4">
                    <!--begin::Statistics Widget 5-->
                    <a href="#" class="card bg-body hoverable card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Svg Icon | path: icons/duotune/graphs/gra007.svg-->
                            <i class="fa fa-circle text-warning fa-3x"></i>
                            <!--end::Svg Icon-->
                            <div class="text-success fw-bolder fs-2 mb-2 mt-5">{{$data['qr_codes']}}</div>
                            <div class="fw-bold text-warning fs-2">qr codes</div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>

        </div>

{{--        <div class="content flex-row-fluid" id="kt_content">--}}
{{--            <!--begin::Card-->--}}
{{--                <!--begin::Card body-->--}}
{{--            <div class="row g-5 g-xl-8">--}}
{{--                <div class="col-xl-3">--}}
{{--                    <!--begin::Statistics Widget 5-->--}}
{{--                    <a href="#" class="card bg-body hoverable card-xl-stretch mb-xl-8">--}}
{{--                        <!--begin::Body-->--}}
{{--                        <div class="card-body">--}}
{{--                            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->--}}
{{--                            <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">--}}
{{--												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--													<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />--}}
{{--													<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />--}}
{{--													<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />--}}
{{--													<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />--}}
{{--												</svg>--}}
{{--											</span>--}}
{{--                            <!--end::Svg Icon-->--}}
{{--                            <div class="text-success fw-bolder fs-2 mb-2 mt-5">{{\App\Models\User::count()}}--}}
{{--                            </div>--}}
{{--                            <div class="fw-bold text-gray-400">{{trans('lang.clients')}}</div>--}}
{{--                        </div>--}}
{{--                        <!--end::Body-->--}}
{{--                    </a>--}}
{{--                    <!--end::Statistics Widget 5-->--}}
{{--                </div>--}}
{{--                <div class="col-xl-3">--}}
{{--                    <!--begin::Statistics Widget 5-->--}}
{{--                    <a href="#" class="card bg-dark hoverable card-xl-stretch mb-xl-8">--}}
{{--                        <!--begin::Body-->--}}
{{--                        <div class="card-body">--}}
{{--                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->--}}
{{--                            <span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">--}}
{{--												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--													<path opacity="0.3" d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z" fill="black" />--}}
{{--													<path d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z" fill="black" />--}}
{{--													<path d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z" fill="black" />--}}
{{--												</svg>--}}
{{--											</span>--}}
{{--                            <!--end::Svg Icon-->--}}
{{--                            <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">{{\App\Models\Category::count()}}</div>--}}
{{--                            <div class="fw-bold text-gray-100">{{trans('lang.Categories')}}</div>--}}
{{--                        </div>--}}
{{--                        <!--end::Body-->--}}
{{--                    </a>--}}
{{--                    <!--end::Statistics Widget 5-->--}}
{{--                </div>--}}
{{--                <div class="col-xl-3">--}}
{{--                    <!--begin::Statistics Widget 5-->--}}
{{--                    <a href="#" class="card bg-warning hoverable card-xl-stretch mb-xl-8">--}}
{{--                        <!--begin::Body-->--}}
{{--                        <div class="card-body">--}}
{{--                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->--}}
{{--                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">--}}
{{--												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--													<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />--}}
{{--													<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />--}}
{{--												</svg>--}}
{{--											</span>--}}
{{--                            <!--end::Svg Icon-->--}}
{{--                            <div class="text-white fw-bolder fs-2 mb-2 mt-5">{{\App\Models\SubCategory::count()}}</div>--}}
{{--                            <div class="fw-bold text-white">{{trans('lang.subCategories')}}</div>--}}
{{--                        </div>--}}
{{--                        <!--end::Body-->--}}
{{--                    </a>--}}
{{--                    <!--end::Statistics Widget 5-->--}}
{{--                </div>--}}
{{--                <div class="col-xl-3">--}}
{{--                    <!--begin::Statistics Widget 5-->--}}
{{--                    <a href="#" class="card bg-info hoverable card-xl-stretch mb-5 mb-xl-8">--}}
{{--                        <!--begin::Body-->--}}
{{--                        <div class="card-body">--}}
{{--                            <!--begin::Svg Icon | path: icons/duotune/graphs/gra007.svg-->--}}
{{--                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">--}}
{{--												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--													<path opacity="0.3" d="M10.9607 12.9128H18.8607C19.4607 12.9128 19.9607 13.4128 19.8607 14.0128C19.2607 19.0128 14.4607 22.7128 9.26068 21.7128C5.66068 21.0128 2.86071 18.2128 2.16071 14.6128C1.16071 9.31284 4.96069 4.61281 9.86069 4.01281C10.4607 3.91281 10.9607 4.41281 10.9607 5.01281V12.9128Z" fill="black" />--}}
{{--													<path d="M12.9607 10.9128V3.01281C12.9607 2.41281 13.4607 1.91281 14.0607 2.01281C16.0607 2.21281 17.8607 3.11284 19.2607 4.61284C20.6607 6.01284 21.5607 7.91285 21.8607 9.81285C21.9607 10.4129 21.4607 10.9128 20.8607 10.9128H12.9607Z" fill="black" />--}}
{{--												</svg>--}}
{{--											</span>--}}
{{--                            <!--end::Svg Icon-->--}}
{{--                            <div class="text-white fw-bolder fs-2 mb-2 mt-5">{{App\Models\Product::count()}}</div>--}}
{{--                            <div class="fw-bold text-white">{{trans('lang.products')}}</div>--}}
{{--                        </div>--}}
{{--                        <!--end::Body-->--}}
{{--                    </a>--}}
{{--                    <!--end::Statistics Widget 5-->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row g-5 g-xl-8">--}}
{{--                <div class="col-xl-3">--}}
{{--                    <!--begin::Statistics Widget 5-->--}}
{{--                    <a href="#" class="card bg-body hoverable card-xl-stretch mb-xl-8">--}}
{{--                        <!--begin::Body-->--}}
{{--                        <div class="card-body">--}}
{{--                            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->--}}
{{--                            <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">--}}
{{--												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--													<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />--}}
{{--													<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />--}}
{{--													<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />--}}
{{--													<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />--}}
{{--												</svg>--}}
{{--											</span>--}}
{{--                            <!--end::Svg Icon-->--}}
{{--                            <div class="text-success fw-bolder fs-2 mb-2 mt-5">{{\App\Models\Question::count()}}</div>--}}
{{--                            <div class="fw-bold text-gray-400">{{trans('lang.Questions')}}</div>--}}
{{--                        </div>--}}
{{--                        <!--end::Body-->--}}
{{--                    </a>--}}
{{--                    <!--end::Statistics Widget 5-->--}}
{{--                </div>--}}
{{--                <div class="col-xl-3">--}}
{{--                    <!--begin::Statistics Widget 5-->--}}
{{--                    <a href="#" class="card bg-dark hoverable card-xl-stretch mb-xl-8">--}}
{{--                        <!--begin::Body-->--}}
{{--                        <div class="card-body">--}}
{{--                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->--}}
{{--                            <span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">--}}
{{--												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--													<path opacity="0.3" d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z" fill="black" />--}}
{{--													<path d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z" fill="black" />--}}
{{--													<path d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z" fill="black" />--}}
{{--												</svg>--}}
{{--											</span>--}}
{{--                            <!--end::Svg Icon-->--}}
{{--                            <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">{{\App\Models\Admin::count()}}</div>--}}
{{--                            <div class="fw-bold text-gray-100">{{trans('lang.Admins')}}</div>--}}
{{--                        </div>--}}
{{--                        <!--end::Body-->--}}
{{--                    </a>--}}
{{--                    <!--end::Statistics Widget 5-->--}}
{{--                </div>--}}
{{--                <div class="col-xl-3">--}}
{{--                    <!--begin::Statistics Widget 5-->--}}
{{--                    <a href="#" class="card bg-warning hoverable card-xl-stretch mb-xl-8">--}}
{{--                        <!--begin::Body-->--}}
{{--                        <div class="card-body">--}}
{{--                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->--}}
{{--                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">--}}
{{--												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--													<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />--}}
{{--													<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />--}}
{{--												</svg>--}}
{{--											</span>--}}
{{--                            <!--end::Svg Icon-->--}}
{{--                            <div class="text-white fw-bolder fs-2 mb-2 mt-5">{{\App\Models\Contact::count()}}</div>--}}
{{--                            <div class="fw-bold text-white">{{trans('lang.Contacts')}}</div>--}}
{{--                        </div>--}}
{{--                        <!--end::Body-->--}}
{{--                    </a>--}}
{{--                    <!--end::Statistics Widget 5-->--}}
{{--                </div>--}}
{{--                <div class="col-xl-3">--}}
{{--                    <!--begin::Statistics Widget 5-->--}}
{{--                    <a href="#" class="card bg-info hoverable card-xl-stretch mb-5 mb-xl-8">--}}
{{--                        <!--begin::Body-->--}}
{{--                        <div class="card-body">--}}
{{--                            <!--begin::Svg Icon | path: icons/duotune/graphs/gra007.svg-->--}}
{{--                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">--}}
{{--												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--													<path opacity="0.3" d="M10.9607 12.9128H18.8607C19.4607 12.9128 19.9607 13.4128 19.8607 14.0128C19.2607 19.0128 14.4607 22.7128 9.26068 21.7128C5.66068 21.0128 2.86071 18.2128 2.16071 14.6128C1.16071 9.31284 4.96069 4.61281 9.86069 4.01281C10.4607 3.91281 10.9607 4.41281 10.9607 5.01281V12.9128Z" fill="black" />--}}
{{--													<path d="M12.9607 10.9128V3.01281C12.9607 2.41281 13.4607 1.91281 14.0607 2.01281C16.0607 2.21281 17.8607 3.11284 19.2607 4.61284C20.6607 6.01284 21.5607 7.91285 21.8607 9.81285C21.9607 10.4129 21.4607 10.9128 20.8607 10.9128H12.9607Z" fill="black" />--}}
{{--												</svg>--}}
{{--											</span>--}}
{{--                            <!--end::Svg Icon-->--}}
{{--                            <div class="text-white fw-bolder fs-2 mb-2 mt-5">{{\App\Models\Rate::count()}}</div>--}}
{{--                            <div class="fw-bold text-white">{{trans('lang.Rates')}}</div>--}}
{{--                        </div>--}}
{{--                        <!--end::Body-->--}}
{{--                    </a>--}}
{{--                    <!--end::Statistics Widget 5-->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="card card-xl-stretch-50 mb-5 mb-xl-8">--}}
{{--                        <!--begin::Body-->--}}
{{--                        <div class="card-body d-flex flex-column p-0">--}}
{{--                            <!--begin::Stats-->--}}
{{--                            <div class="flex-grow-1 card-p pb-0">--}}
{{--                                <div class="d-flex flex-stack flex-wrap">--}}
{{--                                    <div class="me-2">--}}
{{--                                        <a href="#" class="text-dark text-hover-primary fw-bolder fs-3">{{trans('lang.incomefromHostsSubscription')}}</a>--}}
{{--                                        <div class="text-muted fs-7 fw-bold">{{trans('lang.fromHostsSubscription')}}</div>--}}
{{--                                    </div>--}}
{{--                                    <div class="fw-bolder fs-3 text-primary">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--end::Stats-->--}}
{{--                            <!--begin::Chart-->--}}
{{--                            <div class="mixed-widget-7-chart card-rounded-bottom"   id='mixed-widget-7-chart' data-kt-chart-color="primary" style="height: 150px"></div>--}}
{{--                            <!--end::Chart-->--}}
{{--                        </div>--}}
{{--                        <!--end::Body-->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="card card-xl-stretch-50 mb-5 mb-xl-8">--}}
{{--                        <!--begin::Body-->--}}
{{--                        <div class="card-body p-0 d-flex justify-content-between flex-column overflow-hidden">--}}
{{--                            <!--begin::Hidden-->--}}
{{--                            <div class="d-flex flex-stack flex-wrap flex-grow-1 px-9 pt-9 pb-3">--}}
{{--                                <div class="me-2">--}}
{{--                                    <span class="fw-bolder text-gray-800 d-block fs-3">{{trans('lang.Events')}}</span>--}}
{{--                                    <span class="text-gray-400 fw-bold">{{__('lang.event')}}</span>--}}
{{--                                </div>--}}
{{--                                <div class="fw-bolder fs-3 text-primary"></div>--}}
{{--                            </div>--}}
{{--                            <!--end::Hidden-->--}}
{{--                            <!--begin::Chart-->--}}
{{--                            <div class="mixed-widget-10-chart" data-kt-color="primary" style="height: 175px"></div>--}}
{{--                            <!--end::Chart-->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="card card-xl-stretch mb-xl-8">--}}
{{--                <!--begin::Header-->--}}
{{--                <div class="card-header border-0 pt-5">--}}
{{--                    <h3 class="card-title align-items-start flex-column">--}}
{{--                        <span class="card-label fw-bolder fs-3 mb-1">{{trans('lang.provider_requests')}}</span>--}}
{{--                    </h3>--}}
{{--                    <!--begin::Toolbar-->--}}
{{--                    <div class="card-toolbar" data-kt-buttons="true">--}}
{{--                        <h3 class="card-title align-items-start flex-column">--}}
{{--                            <span class="card-label fw-bolder fs-3 mb-1">--}}
{{--                                                        {{__('lang.Total')}}  :--}}
{{--                            </span>--}}
{{--                        </h3>--}}

{{--                    </div>--}}
{{--                    <!--end::Toolbar-->--}}
{{--                </div>--}}
{{--                <!--end::Header-->--}}
{{--                <!--begin::Body-->--}}
{{--                <div class="card-body">--}}
{{--                    <!--begin::Chart-->--}}
{{--                    <div id="kt_charts_widget_33_chart" style="height: 350px"></div>--}}
{{--                    <!--end::Chart-->--}}
{{--                </div>--}}
{{--                <!--end::Body-->--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>


                @endsection
@section('script')

    <script src="{{asset('dashboard/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <!--<script src="{{asset('dashboard/assets/js/pages/features/charts/apexcharts.js')}}"></script>-->

    <script type="text/javascript">

        (function () {
            var e = document.getElementById("kt_charts_widget_33_chart"),
                t = (parseInt(KTUtil.css(e, "height")), KTUtil.getCssVariableValue("--bs-gray-500")),
                a = KTUtil.getCssVariableValue("--bs-gray-200"),
                o = KTUtil.getCssVariableValue("--bs-info"),
                s = KTUtil.getCssVariableValue("--bs-light-info");
            e &&
            new ApexCharts(e, {
                series: [
                    {
                        name:"New Products",
                        data: [
                                @for($x=1; $x<=12; $x++)
                            {{$x * 2}}
                            @endfor
                        ]

                    },

                ],
                chart: { fontFamily: "inherit", type: "area", height: 350, toolbar: { show: !1 } },
                plotOptions: {},
                legend: { show: !1 },
                dataLabels: { enabled: !1 },
                fill: { type: "solid", opacity: 1 },
                stroke: { curve: "smooth", show: !0, width: 3, colors: [o] },
                xaxis: {
                    categories: [
                        @for($x=1; $x<=12; $x++)
                            "{{date('Y')}}-{{$x}}-1",
                        @endfor
                    ],
                    axisBorder: { show: !1 },
                    axisTicks: { show: !1 },
                    labels: { style: { colors: t, fontSize: "12px" } },
                    crosshairs: { position: "front", stroke: { color: o, width: 1, dashArray: 3 } },
                    tooltip: { enabled: !0, formatter: void 0, offsetY: 0, style: { fontSize: "12px" } },
                },
                yaxis: { labels: { style: { colors: t, fontSize: "12px" } } },
                states: { normal: { filter: { type: "none", value: 0 } }, hover: { filter: { type: "none", value: 0 } }, active: { allowMultipleDataPointsSelection: !1, filter: { type: "none", value: 0 } } },
                tooltip: {
                    style: { fontSize: "12px" },
                    y: {
                        formatter: function (e) {
                            return "" + e + " ";
                        },
                    },
                },
                colors: [s],
                grid: { borderColor: a, strokeDashArray: 4, yaxis: { lines: { show: !0 } } },
                markers: { strokeColor: o, strokeWidth: 3 },
            }).render();
        })(),
            {{--(function () {--}}
            {{--    var e = document.getElementById("mixed-widget-7-chart"),--}}
            {{--        t = (parseInt(KTUtil.css(e, "height"))),--}}
            {{--        a = KTUtil.getCssVariableValue("--bs-gray-200"),--}}
            {{--        o = KTUtil.getCssVariableValue("--bs-info"),--}}
            {{--        s = KTUtil.getCssVariableValue("--bs-light-info");--}}
            {{--    e &&--}}
            {{--    new ApexCharts(e, {--}}
            {{--        series: [--}}
            {{--            {--}}
            {{--                name:"",--}}
            {{--                data: [--}}
            {{--                    @for($x = 1;$x <= 12 ; $x++)--}}
            {{--                    {{\App\Models\Subscribe::where('paid_status','paid')->whereMonth('created_at',$x)->whereYear('created_at',date('Y'))->sum('price')}},--}}
            {{--                    @endfor--}}
            {{--                ]--}}

            {{--            },--}}
            {{--        ],--}}
            {{--        chart: { fontFamily: "inherit", type: "area", height: 350, toolbar: { show: !1 } },--}}
            {{--        plotOptions: {},--}}
            {{--        legend: { show: !1 },--}}
            {{--        dataLabels: { enabled: !1 },--}}
            {{--        fill: { type: "solid", opacity: 1 },--}}
            {{--        stroke: { curve: "smooth", show: !0, width: 3, colors: [o] },--}}
            {{--        xaxis: {--}}
            {{--            categories: [--}}
            {{--                @for($x=1; $x<=12; $x++)--}}
            {{--                    "{{date('Y')}}-{{$x}}-1",--}}
            {{--                @endfor--}}
            {{--            ],--}}
            {{--            axisBorder: { show: !1 },--}}
            {{--            axisTicks: { show: !1 },--}}
            {{--            labels: { style: { colors: t, fontSize: "12px" } },--}}
            {{--            crosshairs: { position: "front", stroke: { color: o, width: 1, dashArray: 3 } },--}}
            {{--            tooltip: { enabled: !0, formatter: void 0, offsetY: 0, style: { fontSize: "12px" } },--}}
            {{--        },--}}
            {{--        yaxis: { labels: { style: { colors: t, fontSize: "12px" } } },--}}
            {{--        states: { normal: { filter: { type: "none", value: 0 } }, hover: { filter: { type: "none", value: 0 } }, active: { allowMultipleDataPointsSelection: !1, filter: { type: "none", value: 0 } } },--}}
            {{--        tooltip: {--}}
            {{--            style: { fontSize: "12px" },--}}
            {{--            y: {--}}
            {{--                formatter: function (e) {--}}
            {{--                    return "" + e + " ";--}}
            {{--                },--}}
            {{--            },--}}
            {{--        },--}}
            {{--        colors: [s],--}}
            {{--        grid: { borderColor: a, strokeDashArray: 4, yaxis: { lines: { show: !0 } } },--}}
            {{--        markers: { strokeColor: o, strokeWidth: 3 },--}}
            {{--    }).render();--}}
            {{--})(),--}}




            (function () {
                var e,
                    t,
                    a,
                    o = document.querySelectorAll(".mixed-widget-7-chart"),
                    s = KTUtil.getCssVariableValue("--bs-gray-500"),
                    r = KTUtil.getCssVariableValue("--bs-gray-200"),
                    i = KTUtil.getCssVariableValue("--bs-gray-300");
                [].slice.call(o).map(function (o) {
                    (e = o.getAttribute("data-kt-color")),
                        (t = parseInt(KTUtil.css(o, "height"))),
                        (a = KTUtil.getCssVariableValue("--bs-" + e)),
                        new ApexCharts(o, {
                            series: [

                                { name: "", data: [
                                                            @for($x = 1;$x <= 12 ; $x++)
                                        {{$x * 2}}
                                                            @endfor                                    ] },

                            ],
                            chart: { fontFamily: "inherit", type: "bar", height: t, toolbar: { show: !1 } },
                            plotOptions: { bar: { horizontal: !1, columnWidth: ["50%"], borderRadius: 4 } },
                            legend: { show: !1 },
                            dataLabels: { enabled: !1 },
                            stroke: { show: !0, width: 2, colors: ["transparent"] },
                            xaxis: {
                                categories: [
                                    @for($x=1; $x<=12; $x++)
                                        "{{date('Y')}}-{{$x}}",
                                    @endfor
                                ],
                                axisBorder: { show: !1 }, axisTicks: { show: !1 }, labels: { style: { colors: s, fontSize: "12px" } } },
                            yaxis: { y: 0, offsetX: 0, offsetY: 0, labels: { style: { colors: s, fontSize: "12px" } } },
                            fill: { type: "solid" },
                            states: { normal: { filter: { type: "none", value: 0 } }, hover: { filter: { type: "none", value: 0 } }, active: { allowMultipleDataPointsSelection: !1, filter: { type: "none", value: 0 } } },
                            tooltip: {
                                style: { fontSize: "12px" },
                                y: {
                                    formatter: function (e) {
                                        return "" + e + " ";
                                    },
                                },
                            },
                            colors: [a, i],
                            grid: { padding: { top: 10 }, borderColor: r, strokeDashArray: 4, yaxis: { lines: { show: !0 } } },
                        }).render();
                });
            })(),
            (function () {
                var e,
                    t,
                    a,
                    o = document.querySelectorAll(".mixed-widget-10-chart"),
                    s = KTUtil.getCssVariableValue("--bs-gray-500"),
                    r = KTUtil.getCssVariableValue("--bs-gray-200"),
                    i = KTUtil.getCssVariableValue("--bs-gray-300");
                [].slice.call(o).map(function (o) {
                    (e = o.getAttribute("data-kt-color")),
                        (t = parseInt(KTUtil.css(o, "height"))),
                        (a = KTUtil.getCssVariableValue("--bs-" + e)),
                        new ApexCharts(o, {
                            series: [

                                { name: "{{__('lang.physical')}}", data: [
                                        @for($x=1; $x<=12; $x++)
                                        {{$x * 2}}
                                        @endfor
                                    ] },

                            ],
                            chart: { fontFamily: "inherit", type: "bar", height: t, toolbar: { show: !1 } },
                            plotOptions: { bar: { horizontal: !1, columnWidth: ["50%"], borderRadius: 4 } },
                            legend: { show: !1 },
                            dataLabels: { enabled: !1 },
                            stroke: { show: !0, width: 2, colors: ["transparent"] },
                            xaxis: {
                                categories: [
                                    @for($x=1; $x<=12; $x++)
                                        "{{date('Y')}}-{{$x}}",
                                    @endfor
                                ],
                                axisBorder: { show: !1 }, axisTicks: { show: !1 }, labels: { style: { colors: s, fontSize: "12px" } } },
                            yaxis: { y: 0, offsetX: 0, offsetY: 0, labels: { style: { colors: s, fontSize: "12px" } } },
                            fill: { type: "solid" },
                            states: { normal: { filter: { type: "none", value: 0 } }, hover: { filter: { type: "none", value: 0 } }, active: { allowMultipleDataPointsSelection: !1, filter: { type: "none", value: 0 } } },
                            tooltip: {
                                style: { fontSize: "12px" },
                                y: {
                                    formatter: function (e) {
                                        return "" + e + " ";
                                    },
                                },
                            },
                            colors: [a, i],
                            grid: { padding: { top: 10 }, borderColor: r, strokeDashArray: 4, yaxis: { lines: { show: !0 } } },
                        }).render();
                });
            })()

    </script>
@endsection
