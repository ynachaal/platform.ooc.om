@extends('layouts.admin')

@section('content')
<!-- <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>@lang('custom.users')</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">@lang('custom.home')</a></li>
                    @if(isset($data))
                    <li class="breadcrumb-item active">@lang('custom.edit') @lang('custom.users')</li>
                    @else
                    <li class="breadcrumb-item active">@lang('custom.create') @lang('custom.users')</li>
                    @endif

                </ol>
            </div>
        </div>
    </div>
</section> -->
<div class="card">
    
    <!-- /.card-header -->
    <div class="card-body">
	<div class="table-responsive">
		<table id="example1" class="table table-bordered table-striped data-table">
            <thead>
                <tr>
                    <th>اسم الإستبانة</th>
                    <th>الرمز</th>
                    <th width="100px">@lang('custom.action')</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
                <tr>
                    <th>اسم الإستبانة</th>
                    <th>الرمز</th>
                    <th width="100px">@lang('custom.action')</th>
                </tr>
            </tfoot>
        </table>
	</div>
        
    </div>
    <!-- /.card-body -->
</div>

<script type="text/javascript">
    $(function() {

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: false,
            ajax: "{{ route('forms') }}",
            columns: [{
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'slug',
                    name: 'slug'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

    });
</script>

@endsection