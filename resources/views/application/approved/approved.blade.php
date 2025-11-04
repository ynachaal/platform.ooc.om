@extends('layouts.admin')

@section('content')
<?php 
$user = \Auth::user();
$role = $user->roles->first()->name // or display_name

?>
<div class="card">
<div class="col-xl-12 mb-4">
			 <a href="{{url('application/report-excel?action=approved')}}" id="excel" class="btn btn-success">تصدير Excel</a>
             <a href="{{url('application/report-download?action=approved')}}" class="btn btn-primary">تحميل</a>
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
                    <th>@lang('custom.applicant_name')</th>
					<th> @lang('custom.deadline')</th>
                    <th>رفع المستندات</th>
                    
                    <!-- <th width="100px">@lang('custom.action')</th> -->
                    @else
                    <th>الرقم</th>
                    <th>تاريخ تقديم الطلب</th>
                    <th>عنوان البرنامج</th>
                   <th>مشاهدة الطلب</th>
                    <th>الحالة</th>
                   <!--   <th>Remark</th> -->
					<th> @lang('custom.deadline')</th>
                    <th>رفع المستندات</th>
					 
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
                     <th>@lang('custom.applicant_name')</th>
					 <th> @lang('custom.deadline')</th> 
                    <th>رفع المستندات</th>
					   
                    <!-- <th width="100px">@lang('custom.action')</th> -->
                    @else
                    <th>الرقم</th>
                    <th>تاريخ تقديم الطلب</th>
                    <th>عنوان البرنامج</th>
                  <th>مشاهدة الطلب</th>
                    <th>الحالة</th>
                    <!--   <th>Remark</th> -->
					<th> @lang('custom.deadline')</th>
                    <th>رفع المستندات</th>
					 
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
            ajax: "{{ url('application/approved') }}",
            columns: [
                {
                    data: 'id',
                    "render": function (data, type, row, meta) {
                        return row.DT_RowIndex || 'N/A'; // Default to 'N/A' if index is missing
                    }
                },
                {data: 'created_at', name: 'created_at', defaultContent: 'N/A'}, // Default value
                {
                    data: 'user_id',
                    "render": function (data, type, row, meta) {
                        return row.user && row.user.name ? row.user.name : 'None'; // Handle null/undefined
                    }
                },
                {
                    data: 'user_id',
                    "render": function (data, type, row, meta) {
                        return row.user && row.user.committee 
                            ? row.user.committee.committee_name || 'None' 
                            : 'None'; // Handle nested data
                    }
                },
                {
                    data: 'application',
                    "render": function (data, type, row, meta) {
                        return data && data.title ? data.title : 'N/A'; // Handle null title
                    }
                },
                {data: 'action', name: 'action', orderable: false, searchable: false, defaultContent: ''},
                {
                    data: 'status',
                    "render": function (data, type, row, meta) {
                        return data === 'accepted' ? "تم قبول الطلب " : data || 'N/A'; // Default to 'N/A'
                    }
                },
                {data: 'applicant_name', name: 'applicant_name', defaultContent: 'N/A'},
                {
                    data: 'deadline',
                    "render": function (data, type, row, meta) {
                        return data 
                            ? '<b><span style="color:red">' + data + '</span></b>' 
                            : 'N/A'; // Default for deadline
                    }
                },
                {
                    data: 'id',
                    "render": function (data, type, row, meta) {
                        var time = "{{ time() }}";
                        var url = "{{ url('application/upload_document') }}";
                        if ({{ $role === 'Super Admin' || $role === 'Admin' ? 'true' : 'false' }}) {
                            return '<a href="' + url + '/' + row['id'] + '" class="btn btn-primary btn-sm mr-1"><i class="fa fa-upload"></i></a>';
                        } else if (time <= row['deadline_timestamp']) {
                            return '<a href="' + url + '/' + row['id'] + '" class="btn btn-primary btn-sm mr-1"><i class="fa fa-upload"></i></a>';
                        } else {
                            return '';
                        }
                    },
                    orderable: false,
                    searchable: false
                },
            ]
        });
    });
</script>
@else
<script>
    $(function () {
        var table = $('.data-table').DataTable({
            order: [[0, "desc"]],
            processing: true,
            serverSide: false,
            ajax: "{{ url('application/approved') }}",
            columns: [
                {
                    data: 'id',
                    "render": function (data, type, row, meta) {
                        return row.DT_RowIndex || 'N/A';
                    }
                },
                {data: 'created_at', name: 'created_at', defaultContent: 'N/A'},
                {
                    data: 'application',
                    "render": function (data, type, row, meta) {
                        return data && data.title ? data.title : 'N/A';
                    }
                },
                {data: 'action', name: 'action', orderable: false, searchable: false, defaultContent: ''},
                {
                    data: 'status',
                    "render": function (data, type, row, meta) {
                        return data === 'accepted' ? "تم قبول الطلب " : data || 'N/A';
                    }
                },
                {
                    data: 'deadline',
                    "render": function (data, type, row, meta) {
                        return data 
                            ? '<b><span style="color:red">' + data + '</span></b>' 
                            : 'N/A';
                    }
                },
                {
                    data: 'id',
                    "render": function (data, type, row, meta) {
                        var time = "{{ time() }}";
                        var url = "{{ url('application/upload_document') }}";
                        return time <= row['deadline_timestamp'] 
                            ? '<a href="' + url + '/' + row['id'] + '" class="btn btn-primary btn-sm mr-1"><i class="fa fa-upload"></i></a>' 
                            : '';
                    },
                    orderable: false,
                    searchable: false
                },
            ]
        });
    });

        
         $('body').on('click', '.upload_document', function() {
            var id = $(this).attr('data-id');
            console.log(id);
            $.ajax({
                url: "{{ url('application/upload_document') }}"+"/" + id,
                type: 'GET',
                success: function(data) {
                    console.log(data);
                   

                },
                
            });
         

     });

</script>
@endif



@endsection