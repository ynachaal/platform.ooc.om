@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">WhatsApp Messages</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-responsive">
            <table id="whatsapp-table" class="table table-bordered table-striped data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Recipient</th>
                        <th>Template</th>
                        <th>Parameters</th>
                        <th>Message Body</th>
                        <th>Status</th>
                        <th>Sent At</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Recipient</th>
                        <th>Template</th>
                        <th>Parameters</th>
                        <th>Message Body</th>
                        <th>Status</th>
                        <th>Sent At</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!-- /.card-body -->
</div>

<script type="text/javascript">
    $(function () {

        var table = $('#whatsapp-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('whatsapp_messages.index') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'recipient_phone_number', name: 'recipient_phone_number'},
                {data: 'template', name: 'template'},
                {data: 'parameters', name: 'parameters', render: function(data){
                    if(data){
                        try {
                            return JSON.stringify(JSON.parse(data), null, 2);
                        } catch(e){
                            return data;
                        }
                    } else {
                        return "---";
                    }
                }},
                {data: 'message_body', name: 'message_body'},
                {data: 'status', name: 'status'},
                {data: 'created_at', name: 'created_at'},
            ],
            order: [[6, 'desc']],
            responsive: true,
            scrollX: true
        });

    });
</script>
@endsection
