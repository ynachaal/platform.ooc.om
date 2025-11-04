	@extends('layouts.admin')

	@section('content')
	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col-xl-12 mb-4">
					@if (\Auth::user()->hasAnyRole(['Super Admin']))
						<a href="{{url('programs/create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right add-role"><i class="fas fa-plus fa-sm text-white"></i> إضافة برنامج</a>
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
						<th>عنوان البرنامج</th>
						<th>التصنيف</th>
						<th>الفئة</th>
						<th>Event Start Date</th>
						<th>Event End Date</th>
						<th width="100px">@lang('custom.action')</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
				<tfoot>
					<tr>
						<th>عنوان البرنامج</th>
						<th>التصنيف</th>
						<th>الفئة</th>
						<th>Event Start Date</th>
						<th>Event End Date</th>
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
				ajax: "{{ route('programs') }}",
				columns: [
					{data: 'title', name: 'title'},
					{data: 'parent_program',
						"render": function (data, type, row, meta) {
							if (data) {
								return data.title;

							} else {
								return "---";

							}
						}
					},
					{data: 'category',
						"render": function (data, type, row, meta) {
							console.log(data);
							console.log("MMM");
							console.log(row);
							if (data) {
								return data.name;

							} else {
								return "---";

							}
						}
					},
					{data: 'proposed_dates_from', name: 'Start'},
					{data: 'proposed_dates_to', name: 'End'},
					{data: 'action', name: 'action', orderable: false, searchable: false},
				]
			});

		});
	</script>

	@endsection