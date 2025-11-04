<!DOCTYPE html>
<?php 
$total = 0;

?>
<html>

<head>
    <base href="{{ url('/') }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Theme style -->
    <link rel="stylesheet" href="http://olympic.larademos.xyz/dist/css/adminlte.min.css" type="text/css">
    <link rel="stylesheet" href="http://olympic.larademos.xyz/css/custom.css" type="text/css">
    <link rel="stylesheet" href="http://olympic.larademos.xyz/css/custom_rtl.css" type="text/css">
    <style>
        body {
            /* font-weight: 300; */
            font-family: DejaVu Sans,"sans-serif";
        }
    </style>
</head>

<body class="rtl" dir="rtl">
    <div class="card-header">
        <div class="login-logo">
            <a href="#"><img src="{{url('images/logo.png')}}" /></a>
        </div>
        <div class="login-logo" style="background: url(http://olympic.larademos.xyz/images/logo.png);">
        </div>
    </div>
    <br>
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <table style="font-size: 14px;" id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr style="text-align: center;">
                        @if (\Auth::user()->hasAnyRole(['Super Admin', 'Admin']))
                        <th>الموازنة المعتمدة</th>
                        <th>الدفعة المقدمة</th>
                        <td>عنوان البرنامج</td>
                        <td>اسم الإتحاد أو اللجنة</td>
                        <td>اسم المستخدم</td>
                        <td>تاريخ تقديم الطلب</td>
                        <td>الرقم</td>
                        @else
                        <th>الموازنة المعتمدة</th>
                        <th>الدفعة المقدمة</th>
                        <th>عنوان البرنامج</th>
                        <th>تاريخ تقديم الطلب</th>
                        <th>الرقم</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $value)
                        <?php $total += $value['approved_budget'] ?? 0; ?> <!-- Use null coalescing operator to handle null values -->
                        <tr>
                            @if (\Auth::user()->hasAnyRole(['Super Admin', 'Admin']))
                                <td>{{ $value['approved_budget'] ?? 'N/A' }}</td> <!-- Check if the value is set -->
                                <td>{{ $value['down_payment'] ?? 'N/A' }}</td>
                                <td>{{ optional($value['application'])['title'] ?? 'N/A' }}</td>
                                <td>{{ optional($value['user']['committee'])['committee_name'] ?? 'N/A' }}</td>
                                <td>{{ optional($value['user'])['name'] ?? 'N/A' }}</td>
                                <td style="font-family:Arial, Helvetica, sans-serif !important;">
                                    {{ isset($value['created_at']) ? date(' H:i:s Y/m/d', strtotime($value['created_at'])) : 'N/A' }}
                                </td>
                                <td>{{ $key + 1 }}</td>
                            @else
                                <td>{{ $value['approved_budget'] ?? 'N/A' }}</td>
                                <td>{{ $value['down_payment'] ?? 'N/A' }}</td>
                                <td>{{ optional($value['application'])['title'] ?? 'N/A' }}</td>
                                <td style="font-family:Arial, Helvetica, sans-serif !important;">
                                    {{ isset($value['created_at']) ? date('H:i:s Y/m/d', strtotime($value['created_at'])) : 'N/A' }}
                                </td>
                                <td>{{ $key + 1 }}</td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
        <br>

    </div>

    <div class="card-footer">
        <div class="col-md-6 row" style="width: 100%; display: inline-block;">
            <div class="col-md-5" style="width: 50%; float: right;">
			
			<div>    اسم المستخدم {{Auth::user()->name}}:</div>
        
            </div>
            <div class="col-md-3" style="float: right;">
		
			  تاريخ التحميل {{date('Y-m-d')}}:
              
            </div>
			  <div class="col-md-2" style="float: right;margin-right:10px">
		
			@lang('custom.total_budget') <?php echo $total ?> : 
              
            </div>
			
        </div>
    </div>
</body>

</html>