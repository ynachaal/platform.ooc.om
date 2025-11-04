@extends('layouts.admin')

@section('content')
<style>
div.dataTables_wrapper {
        direction: rtl;
    }
</style>
<div class="card">
    <div class="col-xl-12 mb-4">
			 <a href="{{url('application/report-excel?action=active')}}" id="excel" class="btn btn-success">تصدير Excel</a>
            <a href="{{url('application/report-download?action=active')}}" class="btn btn-primary">تحميل</a>
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
						<!-- <th>Upload Document</th> -->
						<!-- <th width="100px">@lang('custom.action')</th> -->
						@else
						<th>الرقم</th>
						<th>تاريخ تقديم الطلب</th>
						<th>عنوان البرنامج</th>
						<th>مشاهدة الطلب</th>
						<th>الحالة</th>
						<!-- <th>Remark</th> -->
						<!-- <th>Upload Document</th> -->
						@endif
					</tr>
				</thead>
				<tbody>
				</tbody>
				<tfoot>
					<tr>
						@if (\Auth::user()->hasAnyRole(['Super Admin', 'Admin']))
						<th>الرقم </th>
						<th>تاريخ تقديم الطلب</th>
						<th>اسم المستخدم</th>
						<th>اسم الإتحاد أو اللجنة</th>
						<th>عنوان البرنامج</th>
						<th>مشاهدة الطلب</th>
						<th>الحالة</th>
						<!-- <th>Upload Document</th> -->
						<!-- <th width="100px">@lang('custom.action')</th> -->
						@else
						<th>SN</th>
						<th>تاريخ تقديم الطلب</th>
						<th>عنوان البرنامج</th>
						<th>مشاهدة الطلب</th>
						<th>الحالة</th>
						<!-- <th>Remark</th> -->
						<!-- <th>Upload Document</th> -->
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
            dom: 'Bfrtip',
            buttons: [
                { extend: 'print', text: 'طباعة' }
            ],
            order: [[0, "desc"]],
            processing: true,
            serverSide: false,
            ajax: "{{ url('application/active') }}",
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
                    render: (data) => {
                        const statusTranslations = {
                            'under review': 'الطلب قيد المراجعة',
                            'accept temporary': 'تم قبول الطلب مبدئيا',
                            'request not completed': 'الطلب غير مكتمل'
                        };
                        return statusTranslations[data] || data || 'N/A';
                    }
                }
            ]
        });
    });
</script>
@else
<script type="text/javascript">
    $(function () {
        var table = $('.data-table').DataTable({
            dom: 'Bfrtip',
            buttons: [
                { extend: 'print', text: 'طباعة' }
            ],
            order: [[0, "desc"]],
            processing: true,
            serverSide: false,
            ajax: "{{ url('application/active') }}",
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
                    render: (data) => {
                        const statusTranslations = {
                            'under review': 'الطلب قيد المراجعة',
                            'request not completed': 'الطلب غير مكتمل'
                        };
                        return statusTranslations[data] || data || 'N/A';
                    }
                }
            ]
        });
    });
</script>
@endif

<script type="text/javascript">
    $(function () {
        $('body').on('click', '.check_appoved', function () {
            var id = $(this).attr('data-id');
            console.log(id);

            var r = confirm("Are you sure ?");
            if (r == true) {
                var id = $(this).attr('data-id');
                console.log(id);
                var APP_URL = {!! json_encode(url('/')) !!};
                
                $.ajax({
                    url: APP_URL+"/form/approved/"+id,
                    type: 'GET',
                    success: function (data) {
                        console.log("#####");
                        toastr.success('User application Successfully');
                        $('.data-table').DataTable().ajax.reload();

                    },
                    error: function (data) {
                        var errors = data.responseJSON;
                        console.log(errors);
                    }
                });
            }

        });
    
        $('body').on('click', '.check_reject', function () {
            var id = $(this).attr('data-id');
            console.log(id);

            var r = confirm("Are you sure ?");
            if (r == true) {
                var id = $(this).attr('data-id');
                console.log(id);
                var APP_URL = {!! json_encode(url('/')) !!};
                
                $.ajax({
                    url: APP_URL+"/form/reject/"+id,
                    type: 'GET',
                    success: function (data) {
                        console.log("#####");
                        toastr.success('User application Successfully');
                        $('.data-table').DataTable().ajax.reload();

                    },
                    error: function (data) {
                        var errors = data.responseJSON;
                        console.log(errors);
                    }
                });
            }

        });

    });
</script>

@endsection