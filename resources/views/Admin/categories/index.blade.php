@extends('layout.layout')
@php
    $route = 'categories';
@endphp
@section('title',__("lang.$route"))
@section('header')
    <!--begin::Heading-->
    <h1 class="text-dark fw-bolder my-0 fs-2">
        {{trans('lang.'.$route)}}
    </h1>
    <!--end::Heading-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb fw-bold fs-base my-1">
        <li class="breadcrumb-item">
            <a href="{{url('/')}}" class="text-muted">
                {{trans('lang.Dashboard')}} </a>
        </li>
        <li class="breadcrumb-item">
            {{trans('lang.'.$route)}}
        </li>
    </ul>


    <!--end::Breadcrumb-->
@endsection

@section('content')
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body pt-0">

                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-4 gy-5" id="admins_table">
                        <!--begin::Table head-->
                        <thead>
                        <!--begin::Table row-->

                        <tr class="text-start text-muted fw-bolder fs-5 text-uppercase gs-0">
                            <th class="w-10px pe-2">
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                                           data-kt-check-target="#admins_table .checkbox" value="1"/>
                                </div>
                            </th>
                            <th class="min-w-125px">{{__('lang.name')}}</th>
                            <th class="min-w-125px">{{__('lang.Actions')}}</th>
                        </tr>
                        <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->


                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Post-->
    </div>

@endsection

@section('script')
    <script src="{{ URL::asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>

    <script type="text/javascript">
        $(function () {
            var table = $('#admins_table').DataTable({
                processing: true,
                serverSide: true,
                autoWidth: false,
                responsive: true,
                aaSorting: [],
                "dom": "<'card-header border-0 p-0 pt-6'<'card-title' <'d-flex align-items-center position-relative my-1'f> r> <'card-toolbar' <'d-flex justify-content-end add_button'B> r>>  <'row'l r> <''t><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable
                lengthMenu: [[10, 25, 50, 100, 250, -1], [10, 25, 50, 100, 250, "الكل"]],
                "language": {
                    url: "@if(Session('lang')  ==  'ar') //cdn.datatables.net/plug-ins/1.13.6/i18n/ar.json @endif",
                    search: '<i class="fa fa-eye" aria-hidden="true"></i>',
                    searchPlaceholder: 'Search'
                },
                buttons: [
                    {
                        extend: 'colvis',
                        text: '{{__('lang.Show column')}}',
                        title: '',

                        className: 'btn btn-primary me-3',
                        customize: function (win) {
                            $(win.document).css('direction', '{{__('lang.lang-direction')}}');
                        }
                    },

                    {
                        extend: 'print',
                        className: 'btn btn-primary me-3',
                        text: '<i class="bi bi-printer-fill fs-2x"></i>',
                        titleAttr: "{{__('lang.print')}}",
                        customize: function (win) {
                            $(win.document.body)
                                .css('direction', '{{__('lang.lang-direction')}}').prepend(
                                ' <table> ' +
                                '                        <tbody> ' +
                                '                                <tr>' +
                                '                                    <td style="text-align: center">  <p style="padding-right:150px">Bunny Box</p></td>' +
                                '                                    <td style="text-align: right"> <img src="{{asset('logo/logo.png')}}" width="150px" height="150px" /> </td>' +
                                '                                    <td style="text-align: right"><p>{{__("lang.title")}} : {{__('lang.'.$route)}}</p>' +
                                '                                                                  <p>{{__('lang.date')}} : {{ Carbon\Carbon::now()->translatedFormat('l Y/m/d') }}</p>' +
                                '                                                                  <p>{{__('lang.time')}} : {{ Carbon\Carbon::now()->translatedFormat('h:i a') }}</p></td>' +
                                '                                </tr> ' +
                                '                        </tbody>' +
                                '                    </table>'
                            );
                        },

                        exportOptions: {
                            columns: [0, ':visible'],
                            stripHtml: false
                        }
                    },

                    // {extend: 'pdf', className: 'btn btn-raised btn-danger', text: 'PDF'},
                    {
                        extend: 'excel',
                        className: 'btn btn-primary me-3',
                        text: '<i class="bi bi-file-earmark-spreadsheet-fill fs-2x"></i> ',
                        title: '',
                        titleAttr: "{{__('lang.excel')}}",
                        customize: function (win) {
                            $(win.document)
                                .css('direction', 'rtl');
                        },
                        exportOptions: {
                            columns: [0, ':visible']
                        }
                    },

                    // {extend: 'colvis', className: 'btn secondary', text: 'إظهار / إخفاء الأعمدة '}
                ],
                ajax: {
                    url: '{{ route($route.'.datatable') }}',
                    data: {}
                },
                columns: [
                    {data: 'checkbox', name: 'checkbox', "searchable": false, "orderable": false},
                    {data: 'title', name: 'title', "searchable": true, "orderable": true},
                    {data: 'actions', name: 'actions', "searchable": false, "orderable": false},
                ]
            });
            $.ajax({
                url: "{{ URL::to($route.'/add-button')}}",
                success: function (data) {
                    $('.add_button').append(data);
                },
                dataType: 'html'
            });
        });
    </script>

    <script>

        $("#admins_table").find('.group-checkable').change(function () {
            var set = jQuery(this).attr("data-set");
            var checked = jQuery(this).is(":checked");
            jQuery(set).each(function () {
                if (checked) {
                    $(this).prop("checked", true);
                    $(this).parents('tr').addClass("active");
                } else {
                    $(this).prop("checked", false);
                    $(this).parents('tr').removeClass("active");
                }
            });
        });

        $("#admins_table").on('change', 'tbody tr .checkboxes', function () {
            $(this).parents('tr').toggleClass("active");
        });
    </script>
@endsection

