@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-xl-12 mb-4">
            @if (\Auth::user()->hasAnyRole(['Super Admin']))
                <a href="{{url('slider/create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right add-role"><i class="fas fa-plus fa-sm text-white"></i> إضافة بنر</a>
            @endif
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
	<div class="table-responsive">
		<table id="example1" class="table table-bordered table-striped data-table">
            <thead>
                <tr>
                    <th>صورة البنر</th>
                    <th>ترتيب عرض البنر</th>
                    <th width="100px">الضبط</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
                <tr>
                    <th>صورة البنر</th>
                    <th>ترتيب عرض البنر</th>
                    <th width="100px">الضبط</th>
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
            ajax: "{{ route('slider') }}",
            aaSorting: [[1, 'asc']],
            columns: [
            {data: 'image',
                    "render": function (data, type, row, meta) {
                    return  '<img height="100" width="100" src="{{url('upload/slider')}}/' + data + '" />';
                    }
            },
            {data: 'order_by', name: 'order_by'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
    });
    });
</script>

@endsection