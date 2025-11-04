@extends('layouts.admin')

@section('content')


            
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Send Alerts</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">@lang('custom.home') </a></li>
                                        <li class="breadcrumb-item active">
                                            @lang('custom.sendalerts')  </li>
                    
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                                                <h3 class="card-title">@lang('custom.sendalerts')</h3>
                                            </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" id="userForm" method="POST" action="https://platform.ooc.om/save-alert-message" enctype="multipart/form-data" novalidate="novalidate">
                        @csrf                      
                        
                        <div class="card-body">
                                    

                            <div class="form-group">
                                <label for="exampleInputEmail1">@lang('custom.users') </label>
                                <select required multiple name="users[]" class="form-control" aria-invalid="false">
                                        @foreach($data as $val)                 <option value="{{$val['id']}}">{{$val['name']}}({{$val['email']}})</option>
                                        @endforeach              
                                                                     </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">@lang('custom.message') </label>
                          <textarea required class="form-control" name="message" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                                                        <button id="submit" type="submit" class="btn btn-primary">إرسال</button>
                                                        
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>


         
@endsection