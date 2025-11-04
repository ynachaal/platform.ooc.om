@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
       <div class="row">
            <div class="col-xl-12 mb-4">
			 <a href="{{url('application/report-excel')}}" id="excel" class="btn btn-success">@lang('custom.export_excel')</a>
            <a href="{{url('application/report-download')}}" id="pdf" class="btn btn-primary">تحميل</a>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
		<div class="form-group col-md-3">
                <label for="exampleInputEmail1">@lang('custom.active_status')</label>
                <select name="status" class="form-control" id="status">
                    <option value="" >@lang('custom.all')</option>
                    @foreach($status_array as $status)
					<?php 
						if($status=='accept temporary') 
							$label = trans('custom.accepted_temporary');
						else if($status=='accepted') 
							$label = trans('custom.accepted');
						else if($status=='closed') 
							$label = trans('custom.closed');
						else if($status=='rejected') 
							$label = trans('custom.rejected');
						else if($status=='request not completed') 
							$label = trans('custom.request_not_completed');
						else if($status=='under review') 
							$label = trans('custom.under_review');
						else 
							$label = $status;
					?>
                        <option value="{{$label}}" >{{$label}}</option>
                        @endforeach
                </select>
            </div>
            
             @if (\Auth::user()->hasAnyRole(['Super Admin', 'Admin']))
            <div class="form-group col-md-3">
                <label for="exampleInputEmail1">اسم الإتحاد أو اللجنة</label>
                <select name="committee_id"  class="form-control" id="committee">
                    <option value="" >@lang('custom.all')</option>
                    @foreach($committee as $committee)
                        <option value="{{$committee['committee_name']}}" >{{$committee['committee_name']}}</option>
                        @endforeach
                </select>
            </div>
            @endif
            
            <div class="form-group col-md-3">
                <label for="exampleInputEmail1">السنة</label>
                <select id="year" name="year" class="form-control ">
                    <option value="" >@lang('custom.all')</option>
                    {{ $last= 2020 }}
                    {{ $now = date('Y') }}

                    @for ($i = $now; $i >= $last; $i--)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
        </div>
		<div class="table-responsive">
			<table id="example1" class="table table-bordered table-striped data-table">
            <thead>
                <tr>
                    @if (\Auth::user()->hasAnyRole(['Super Admin', 'Admin']))
                    <th>الرقم</th>
				
                    <th>تاريخ تقديم الطلب</th>
                    <th>اسم الإتحاد أو اللجنة</th>
                    <th>عنوان البرنامج</th>
					 <th>@lang('custom.active_status')</th>
					  <th>@lang('custom.allocated')</th>
                    <th>@lang('custom.total_budget')</th>
                    <!-- <th>شهادة الموافقة</th> -->
                    
                    
                    
                    @else
                    <th>الرقم</th>
                    <th>تاريخ تقديم الطلب</th>
                    <th>عنوان البرنامج</th>
                    <!-- <th>شهادة الموافقة</th> -->
                    
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
                    <th>اسم الإتحاد أو اللجنة</th>
                    <th>عنوان البرنامج</th>
					 <th>@lang('custom.active_status')</th>
					 <th>@lang('custom.allocated')</th>
                    <th>@lang('custom.total_budget') <br/><br/>Total Budget<br/><div class="tb"><?php echo $total_budget ?></div></th>
                    <!-- <th>شهادة الموافقة</th> -->

                    @else
                    <th>الرقم</th>
                    <th>تاريخ تقديم الطلب</th>
                    <th>عنوان البرنامج</th>
                    <!-- <th>شهادة الموافقة</th> -->
                    
                    @endif
                </tr>
            </tfoot>
        </table>
		</div>
        
    </div>
	<Div></div>
    <!-- /.card-body -->
</div>
@if (\Auth::user()->hasAnyRole(['Super Admin', 'Admin']))
<script type="text/javascript">
    $(function () {
        var table = $('.data-table').DataTable({
            order: [[ 0, "desc" ]],
            processing: true,
            serverSide: false,
            ajax: "{{ url('application/report') }}",
            columns: [
                {data: 'id',
                    "render": function (data, type, row, meta) {
                       return  row.DT_RowIndex;
                    }
                },
                {data: 'created_at', name: 'created_at'},
              
                {
                    data: 'user_id',
                    "render": function (data, type, row, meta) {
                        var result = 'None';
                        if (row.user && row.user.committee) {
                            result = row.user.committee.committee_name;
                        }
                        return result;
                    }
                },
                {data: 'application', "searchable": false,
                    "render": function (data, type, row, meta) {
                        return data && data.title ? data.title : 'No title available'; // Condition added
                    }
                },
                {data: 'status', name: 'status'},
                {data: 'down_payment', name: 'down_payment'},
                {data: 'approved_budget', name: 'approved_budget'},
            ]
        });

        $('body').on('change','#committee', function () {
            var status = $("#status").val();
            var year = $('#year').val();
            var committee_id = $('#committee').val();
            var url = "{{ url('/') }}/application/report-excel?status=" + status + "&committee_id=" + committee_id + "&year=" + year;
            var url1 = "{{ url('/') }}/application/report-download?status=" + status + "&committee_id=" + committee_id + "&year=" + year;
            $.ajax({
                url: "{{ url('/') }}/application/getttotal",
                type: "post",
                data: {status: status, committee_id: committee_id, year: year, "_token": "{{ csrf_token() }}"},
                success: function (d) {
                    $(".tb").html(d)
                }
            });
            $("#excel").attr('href', url);
            $("#pdf").attr('href', url1);
            table.search($('#committee').val()).draw();
        });

        $('body').on('change','#year', function () {
            var status = $("#status").val();
            var year = $('#year').val();
            var committee_id = $('#committee').val();
            var url = "{{ url('/') }}/application/report-excel?status=" + status + "&committee_id=" + committee_id + "&year=" + year;
            var url1 = "{{ url('/') }}/application/report-download?status=" + status + "&committee_id=" + committee_id + "&year=" + year;
            $.ajax({
                url: "{{ url('/') }}/application/getttotal",
                type: "post",
                data: {status: status, committee_id: committee_id, year: year, "_token": "{{ csrf_token() }}"},
                success: function (d) {
                    $(".tb").html(d)
                }
            });
            $("#excel").attr('href', url);
            $("#pdf").attr('href', url1);
            table.search($('#year').val()).draw();
        });

        $('body').on('change','#status', function () {
            var status = $("#status").val();
            var year = $('#year').val();
            var committee_id = $('#committee').val();
            var url = "{{ url('/') }}/application/report-excel?status=" + status + "&committee_id=" + committee_id + "&year=" + year;
            var url1 = "{{ url('/') }}/application/report-download?status=" + status + "&committee_id=" + committee_id + "&year=" + year;
            $(".tb").html('Calculating Please Wait');
            $.ajax({
                url: "{{ url('/') }}/application/getttotal",
                type: "post",
                data: {status: status, committee_id: committee_id, year: year, "_token": "{{ csrf_token() }}"},
                success: function (d) {
                    $(".tb").html(d)
                }
            });
            $("#excel").attr('href', url);
            $("#pdf").attr('href', url1);
            table.search($('#status').val()).draw();
        });
    });
</script>
@else
<script>
    $(function () {
        var table = $('.data-table').DataTable({
            order: [[ 0, "desc" ]],
            processing: true,
            serverSide: false,
            ajax: "{{ url('application/report') }}",
            columns: [
                {data: 'id',
                    "render": function (data, type, row, meta) {
                       return  row.DT_RowIndex;
                    }
                },
                {data: 'created_at', name: 'created_at'},
                {data: 'application',
                    "render": function (data, type, row, meta) {
                       return data && data.title ? data.title : 'N/A'; // Condition added
                    }
                },
            ]
        });

        $('body').on('change','#committee', function () {
            var status = $("#status").val();
            var year = $('#year').val();
            var committee_id = $('#committee').val();
            var url = "{{ url('/') }}/application/report-excel?status=" + status + "&committee_id=" + committee_id + "&year=" + year;
            var url1 = "{{ url('/') }}/application/report-download?status=" + status + "&committee_id=" + committee_id + "&year=" + year;
            $.ajax({
                url: "{{ url('/') }}/application/getttotal",
                type: "post",
                data: {status: status, committee_id: committee_id, year: year, "_token": "{{ csrf_token() }}"},
                success: function (d) {
                    $(".tb").html(d)
                }
            });
            $("#excel").attr('href', url);
            $("#pdf").attr('href', url1);
            table.search($('#committee').val()).draw();
        });

        $('body').on('change','#year', function () {
            var status = $("#status").val();
            var year = $('#year').val();
            var committee_id = $('#committee').val();
            var url = "{{ url('/') }}/application/report-excel?status=" + status + "&committee_id=" + committee_id + "&year=" + year;
            var url1 = "{{ url('/') }}/application/report-download?status=" + status + "&committee_id=" + committee_id + "&year=" + year;
            $.ajax({
                url: "{{ url('/') }}/application/getttotal",
                type: "post",
                data: {status: status, committee_id: committee_id, year: year, "_token": "{{ csrf_token() }}"},
                success: function (d) {
                    $(".tb").html(d)
                }
            });
            $("#excel").attr('href', url);
            $("#pdf").attr('href', url1);
            table.search($('#year').val()).draw();
        });

        $('body').on('change','#status', function () {
            var status = $("#status").val();
            var year = $('#year').val();
            var committee_id = $('#committee').val();
            var url = "{{ url('/') }}/application/report-excel?status=" + status + "&committee_id=" + committee_id + "&year=" + year;
            var url1 = "{{ url('/') }}/application/report-download?status=" + status + "&committee_id=" + committee_id + "&year=" + year;
            $(".tb").html('Calculating Please Wait');
            $.ajax({
                url: "{{ url('/') }}/application/getttotal",
                type: "post",
                data: {status: status, committee_id: committee_id, year: year, "_token": "{{ csrf_token() }}"},
                success: function (d) {
                    $(".tb").html(d)
                }
            });
            $("#excel").attr('href', url);
            $("#pdf").attr('href', url1);
            table.search($('#status').val()).draw();
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