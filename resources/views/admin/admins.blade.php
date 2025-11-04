@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-xl-12 mb-4">
                <a href="{{url('/create_admins')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right add-role"><i class="fas fa-plus fa-sm text-white"></i>إضافة مشرف</a>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
	<div class="table-responsive">
        <table id="example1" class="table table-bordered table-striped data-table">
            <thead>
                <tr>
                    <th>اسم المشرف</th>
                    <th>@lang('custom.email_placeholder')</th>
					  <th>@lang('custom.last_login')</th>
                    <th>هاتف</th>
                    <th>عنوان وظيفي</th>
                    <th>صورة الملف الشخصي</th>
                    <th width="100px">@lang('custom.action')</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
                <tr>
                    <th>اسم المشرف</th>
                    <th>@lang('custom.email_placeholder')</th>
					  <th>@lang('custom.last_login')</th>
                    <th>هاتف</th>
                    <th>عنوان وظيفي</th>
                    <th>صورة الملف الشخصي</th>
                    <th width="100px">@lang('custom.action')</th>
                </tr>
            </tfoot>
        </table>
		</div>
    </div>
    <!-- /.card-body -->
</div>

<script type="text/javascript">
    $(function () {

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: false,
            ajax: "{{ route('admins') }}",
            columns: [
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
				 {data: 'last_login', name: 'last_login'},
                {data: 'phone',
                    "render": function (data, type, row, meta) {
                        if(data){
                            return  data;
                        }
                        else{
                            return "---";
                        }
                    }
                },
                {data: 'job_title',
                    "render": function (data, type, row, meta) {
                        if(data){
                            return  data;
                        }
                        else{
                            return "---";
                        }
                    }
                },
                
                {data: 'image',
                    "render": function (data, type, row, meta) {
                    console.log(data);
                    if(data){
                        return  '<img height="100" width="100" src="{{url('upload/admin')}}/'+data+'" />';
                    }
                    else{
                        return "---";
                    }
                    }
                },
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

    });
</script>

@endsection