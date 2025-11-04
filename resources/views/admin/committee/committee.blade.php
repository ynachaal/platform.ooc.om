@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-xl-12 mb-4">
                @if (\Auth::user()->hasAnyRole(['Super Admin']))
                    <a href="{{url('committee/create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right add-role"><i class="fas fa-plus fa-sm text-white"></i> @lang('custom.add_a_union_or_committee')</a>
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
                    <th>@lang('custom.association_committee')</th>
                    <th>@lang('custom.profile_picture')</th>
                    <th width="100px">@lang('custom.action')</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
                <tr>
                    <th>@lang('custom.title')</th>
                    <th>@lang('custom.image')</th>
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
            "language": {
                "paginate": {
                    "previous": "السابق",
                    "next": "التالي",
                }
            },
            "oLanguage": {
                "sSearch": "البحث",
                "sLengthMenu": "إظهار _MENU_ حقول",
                "sInfo": "إظهار _START_ إلى _TOTAL_ من _END_ حقول ",
            },
            processing: true,
            serverSide: false,
            ajax: "{{ route('committee') }}",
            columns: [
                {data: 'committee_name', name: 'committee_name'},
                {data: 'committee_logo',
                "render": function (data, type, row, meta) {
                   return  '<img height="100" width="100" src="{{url('upload/committee')}}/'+data+'" />';
                }
            },
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

    });
</script>

@endsection