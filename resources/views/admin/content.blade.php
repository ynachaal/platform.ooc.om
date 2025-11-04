@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-xl-12 mb-4">
                @if (\Auth::user()->hasAnyRole(['Super Admin']))
                    <a href="{{url('content/create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right add-role"><i class="fas fa-plus fa-sm text-white"></i> @lang('custom.create') @lang('custom.content')</a>
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
                    <th>@lang('custom.title')</th>
                    <th>@lang('custom.sort_order')</th>
                    <th width="100px">@lang('custom.action')</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
                <tr>
                    <th>@lang('custom.title')</th>
                    <th>@lang('custom.sort_order')</th>
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
			order:[],
            ajax: "{{ route('content') }}",
            columns: [
                {data: 'title', name: 'title'},
                {data: 'sort_order', name: 'sort_order'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

    });
</script>

@endsection