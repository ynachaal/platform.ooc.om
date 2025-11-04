@extends('layouts.admin')

@section('content')

<?php 
$user = \Auth::user();
$role = $user->roles->first()->name // or display_name
?>
<div class="card">
<div class="col-xl-12 mb-4">
			 <a href="{{url('application/report-excel?action=closed')}}" id="excel" class="btn btn-success">تصدير Excel</a>
              <a href="{{url('application/report-download?action=closed')}}" class="btn btn-primary">تحميل</a>
            </div>
    <div class="card-header">
<!--        <div class="row">
            <div class="col-xl-12 mb-4">
                <a href="{{url('news/create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right add-role"><i class="fas fa-plus fa-sm text-white"></i> @lang('custom.create') @lang('custom.news')</a>
            </div>
        </div>-->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
	<div class="table-responsive">
		<table id="example1" class="table table-bordered table-striped data-table">
            <thead>
                <tr>
                    @if (\Auth::user()->hasAnyRole(['Super Admin', 'Admin']))
                    <th>الرقم</th>
                    <th>تاريخ تقديم الطلب</th>
                    <th>اسم المستخدم</th>
                    <th>اسم الإتحاد أو اللجنة</th>
                    <th>عنوان البرنامج</th>
                    <th>مشاهدة الطلب</th>
                    <th>الحالة</th>
                    <th>رفع المستندات</th>
                    <!-- <th>رفع المستندات</th> -->
                    <!-- <th width="100px">@lang('custom.action')</th> -->
                    @else
                    <th>الرقم</th>
                    <th>تاريخ تقديم الطلب</th>
                    <th>عنوان البرنامج</th>
                    <th>مشاهدة الطلب</th>
                    <th>الحالة</th>
                    <th>ملاحظة</th>
                    <th>رفع المستندات</th>
                    <!-- <th>رفع المستندات</th> -->
                    @endif
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
                <tr>
                    @if (\Auth::user()->hasAnyRole(['Super Admin', 'Admin']))
                    <th>الرقم</th>
                    <th>تاريخ تقديم الطلب</th>
                    <th>اسم المستخدم</th>
                    <th>اسم الإتحاد أو اللجنة</th>
                    <th>عنوان البرنامج</th>
                    <th>مشاهدة الطلب</th>
                    <th>الحالة</th>
                    <th>رفع المستندات</th>
                    <!-- <th>رفع المستندات</th> -->
                    <!-- <th width="100px">@lang('custom.action')</th> -->
                    @else
                    <th>الرقم</th>
                    <th>تاريخ تقديم الطلب</th>
                    <th>عنوان البرنامج</th>
                    <th>مشاهدة الطلب</th>
                    <th>الحالة</th>
                    <th>ملاحظة</th>
                    <th>رفع المستندات</th>
                    <!-- <th>رفع المستندات</th> -->
                    @endif
                </tr>
            </tfoot>
        </table>
	</div>
        
    </div>
    <!-- /.card-body -->
</div>

@if (\Auth::user()->hasAnyRole(['Super Admin', 'Admin']))
<script type="text/javascript">
    $(function () {
        var table = $('.data-table').DataTable({
            order: [[0, "desc"]],
            processing: true,
            serverSide: false,
            ajax: "{{ url('application/closed') }}",
            columns: [
                {
                    data: 'id',
                    render: (data, type, row) => row.DT_RowIndex || 'N/A'
                },
                {data: 'created_at', name: 'created_at'},
                {
                    data: 'user_id',
                    render: (data, type, row) => row.user?.name || 'None'
                },
                {
                    data: 'user_id',
                    render: (data, type, row) => row.user?.committee?.committee_name || 'None'
                },
                {
                    data: 'application',
                    render: (data) => data?.title || 'N/A'
                },
                {data: 'action', name: 'action', orderable: false, searchable: false},
                {
                    data: 'status',
                    render: (data) => (data === 'closed' ? "مغلق" : data || 'N/A')
                },
                {
                    data: 'id',
                    render: (data, type, row) => {
                        const time = "{{ time() }}";
                        const url = "{{ url('application/upload_document') }}";
                        if ("{{ $role }}" === 'Super Admin' || time <= row.deadline_timestamp) {
                            return `<a href="${url}/${row.id}" class="btn btn-primary btn-sm mr-1"><i class="fa fa-upload"></i></a>`;
                        }
                        return '';
                    },
                    orderable: false,
                    searchable: false
                }
            ]
        });
    });
</script>
@else
<script type="text/javascript">
    $(function () {
        var table = $('.data-table').DataTable({
            order: [[0, "desc"]],
            processing: true,
            serverSide: false,
            ajax: "{{ url('application/closed') }}",
            columns: [
                {
                    data: 'id',
                    render: (data, type, row) => row.DT_RowIndex || 'N/A'
                },
                {data: 'created_at', name: 'created_at'},
                {
                    data: 'application',
                    render: (data) => data?.title || 'N/A'
                },
                {data: 'action', name: 'action', orderable: false, searchable: false},
                {
                    data: 'status',
                    render: (data) => (data === 'closed' ? "مغلق" : data || 'N/A')
                },
                {
                    data: 'remark',
                    render: (data, type, row) => row.remark || '---'
                },
                {
                    data: 'id',
                    render: (data, type, row) => {
                        const time = "{{ time() }}";
                        const url = "{{ url('application/upload_document') }}";
                        if ("{{ $role }}" === 'Super Admin' || time <= row.deadline_timestamp) {
                            return `<a href="${url}/${row.id}" class="btn btn-primary btn-sm mr-1"><i class="fa fa-upload"></i></a>`;
                        }
                        return '';
                    },
                    orderable: false,
                    searchable: false
                }
            ]
        });
    });
</script>
@endif


<script type="text/javascript">
    $(function () {

        // var table = $('.data-table').DataTable({
        //     processing: true,
        //     serverSide: false,
        //     ajax: "{{ url('/application/approved')}}",
        //     columns: [
        //         {data: 'user_id',
        //             "render": function (data, type, row, meta) {
        //                return  row.user.name;
        //             }
        //         },
        //         {data: 'application',
        //             "render": function (data, type, row, meta) {
        //                return  data.title;
        //             }
        //         },
        //         {data: 'created_at', name: 'created_at'},
        //         {data: 'feedback',
        //             "render": function (data, type, row, meta) {
        //                 if(row.feedback != null)
        //                 {
        //                   return  row.feedback;  
        //                 }
        //                 else{
        //                     return  "---";
        //                 }
        //             }
        //         },
        //         {data: 'remark',
        //             "render": function (data, type, row, meta) {
        //                 if(row.remark != null)
        //                 {
        //                   return  row.remark;  
        //                 }
        //                 else{
        //                     return  "---";
        //                 }
        //             }
        //         },
                
        //         {data: 'action', name: 'action', orderable: false, searchable: false},
        //     ]
        // });

    });
</script>

@endsection