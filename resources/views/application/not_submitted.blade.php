@extends('layouts.admin')

@section('content')

<div class="card">
         <div class="col-xl-12 mb-4">
			 <a href="{{url('application/report-excel?action=not_submitted')}}" id="excel" class="btn btn-success">تصدير Excel</a>
              <a href="{{url('application/report-download?action=not_submitted')}}" class="btn btn-primary">تحميل</a>
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
    <!-- /.card-body -->
</div><script type="text/javascript">
    $(function () {
        // Define status translations
        const statusTranslations = {
            'under review': 'الطلب قيد المراجعة',
            'accept temporary': 'تم قبول الطلب مبدئيا',
            'request not completed': 'الطلب غير مكتمل'
        };

        // Function to initialize DataTable
        const initializeTable = (url, isAdmin = false) => {
            const columns = [
                {
                    data: 'id',
                    render: (data, type, row, meta) => row.DT_RowIndex || '---'
                },
                { data: 'created_at', name: 'created_at' },
                isAdmin
                    ? {
                          data: 'user_id',
                          render: (data, type, row) => row.user?.name || 'None'
                      }
                    : null,
                isAdmin
                    ? {
                          data: 'user_id',
                          render: (data, type, row) =>
                              row.user?.committee?.committee_name || 'None'
                      }
                    : null,
                {
                    data: 'application',
                    render: (data, type, row) => data?.title || '---'
                },
                { data: 'action', name: 'action', orderable: false, searchable: false },
                {
                    data: 'status',
                    render: (data, type, row) => statusTranslations[data] || data || '---'
                }
            ].filter(Boolean); // Filter out null columns for non-admin users

            $('.data-table').DataTable({
                dom: 'Bfrtip',
                buttons: [{ extend: 'print', text: 'طباعة' }],
                order: [[0, 'desc']],
                processing: true,
                serverSide: false,
                ajax: url,
                columns: columns
            });
        };

        // Determine user role and initialize the appropriate DataTable
        @if (\Auth::user()->hasAnyRole(['Super Admin', 'Admin']))
            initializeTable("{{ url('application/active') }}", true);
        @else
            initializeTable("{{ url('application/not-submitted') }}");
        @endif
    });
</script>

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

