@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
      
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
	

         
        </div>
		<div class="table-responsive">
			<table id="example1" class="table table-bordered table-striped data-table">
            <thead>
                <tr>
                  
                    <th>الرقم</th>
                   
                    <th>Message</th>
                    <th>Sender</th>
                    <th>Date</th>
                    <!-- <th>شهادة الموافقة</th> -->
                    
              
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
                <tr>
                    
                   <th>الرقم</th>
                  
                    <th>Message</th>
                    <th>Sender</th>
                    <th>Date</th>
                    <!-- <th>شهادة الموافقة</th> -->
                    
                
                </tr>
            </tfoot>
        </table>
		</div>
        
    </div>
	<Div></div>
    <!-- /.card-body -->
</div>


<script>
    $(function () {
        var table = $('.data-table').DataTable({
            order: [[ 0, "desc" ]],
            processing: true,
            serverSide: false,
            // dom: 'Bfrtip',
            // buttons: [
            //     { extend: 'excel', text: 'تحميل' }
            // ],
            ajax: "{{ url('application/user-alerts') }}",
            columns: [
                {data: 'id',
                    "render": function (data, type, row, meta) {
                       return  row.DT_RowIndex;
                    }
                },
                {data: 'alert_message', name: 'alert_message'},
                {data: 'sender', name: 'sender'},
                {data: 'created_at', name: 'created_at'},
                // {data: 'certificated_approval', name: 'certificated_approval'},
                
                // {data: 'application',
                //     "render": function (data, type, row, meta) {
                //         console.log(data.certificated_approval);
                //        return  data.certificated_approval;
                //     }
                // },
            ]
        });
       
    });
</script>



@endsection