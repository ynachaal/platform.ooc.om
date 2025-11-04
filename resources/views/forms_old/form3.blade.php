<style>
    /* .form_header_2{
        padding: 5px;
        background-color: #ccc;
    } */
</style>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>استمارة المشاركة</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">@lang('custom.home')</a></li>
                    <li class="breadcrumb-item active">{{ $slug }}</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">{{$form_data['name']}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" id="quickForm" method="POST" action="{{ url('/forms/save_form1') }}">
                        @csrf

                        @if(isset($dataUserApplications))
                        <input type="hidden" name="dataUserApplicationsId" value="{{$dataUserApplications['id']}}" />
                        @endif

                        <div class="card-body">
                            <div class="form-group col-md-6">
                                <input type="hidden" name="application_id" class="form-control"  value="{{$application_id}}">
                            </div>
                            
                            <h3 class="form_header_2">COURSE DETAILS</h3>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Sport (or other)</label>
                                    <input type="text" name="sport" class="form-control" value="{{isset($data['sport'])? $data['sport'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Discipline</label>
                                    <input type="text" name="discipline" class="form-control" value="{{isset($data['discipline'])? $data['discipline'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Proposed dates</label>
                                    <input type="date" name=proposed_dates_form" class="form-control col-md-6"  value="{{isset($data['proposed_dates_form'])? $data['proposed_dates_form'] : ''}}">
                                    <input type="date" name=proposed_dates_to" class="form-control col-md-6"  value="{{isset($data['proposed_dates_to'])? $data['proposed_dates_to'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Suggested level:</label>
                                    <input type="radio" id="suggested_level" name="suggested_level"  value="1" {{isset($data['suggested_level']) && $data['suggested_level']  =="1" ? 'checked' : ''}} >
                                    <label for="1">1</label>
                                    <input type="radio" id="suggested_level" name="suggested_level" value="2" {{isset($data['suggested_level']) && $data['suggested_level']  == "2" ? 'checked' : ''}}>
                                    <label for="2">2</label>
                                    <input type="radio" id="suggested_level" name="suggested_level" value="3" {{isset($data['suggested_level']) && $data['suggested_level']  == "3" ? 'checked' : ''}}>
                                    <label for="3">3</label>
                                    <input type="radio" id="suggested_level" name="suggested_level" value="4" {{isset($data['suggested_level']) && $data['suggested_level']  == "4" ? 'checked' : ''}}>
                                    <label for="4">4</label>
                                    <input type="radio" id="suggested_level" name="suggested_level" value="5" {{isset($data['suggested_level']) && $data['suggested_level']  == "5" ? 'checked' : ''}}>
                                    <label for="5">5</label>
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Number of participants</label>
                                    <input class="form-check-input" type="checkbox" name="number_of_participants" value="men" {{isset($data['number_of_participants']) && $data['number_of_participants']  =="men" ? 'checked' : ''}}>
                                    <label class="form-check-label">Men</label>
                                    <input class="form-check-input" type="checkbox" name="number_of_participants" value="women" {{isset($data['number_of_participants']) && $data['number_of_participants']  =="women" ? 'checked' : ''}}>
                                    <label for="2">Women</label>
                                    <input class="form-check-input" type="checkbox" name="number_of_participants" value="total" {{isset($data['number_of_participants']) && $data['number_of_participants']  =="total" ? 'checked' : ''}}>
                                    <label for="3">TOTAL</label>
                                    
                                </div>
                            </div>
                            <h3 class="form_header_2">TECHNICAL INFORMATION</h3>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Programme contents (summary)</label>
                                    <textarea class="form-control" name="programme_contents" rows="5" >
                                       {{isset($data) && $data['programme_contents'] ? $data['programme_contents'] : "" }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">City</label>
                                    <input type="text" name="city" class="form-control" value="{{isset($data['city'])? $data['city'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Venue</label>
                                    <input type="text" name="venue" class="form-control" value="{{isset($data['venue'])? $data['venue'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Materials available</label>
                                        <textarea class="form-control"  name ="materials_available"rows="3">{{isset($data['materials_available']) ? $data['materials_available'] : ''}}</textarea>
                                </div>
                            </div>
                            
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Other information</label>
                                    <textarea class="form-control"  name ="other_information" rows="3">{{isset($data['other_information']) ? $data['other_information'] : ''}}</textarea>
                                </div>
                            </div>
                            <h3 class="form_header_2">PROPOSED EXPERT</h3>
                            
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Family name</label>
                                    <input type="text" name="family_name" class="form-control" value="{{isset($data['family_name'])? $data['family_name'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Given name(s)</label>
                                    <input type="text" name="given_name" class="form-control"  value="{{isset($data['given_name'])? $data['given_name'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Nationality</label>
                                    <input type="text" name="nationality" class="form-control" value="{{isset($data['nationality'])? $data['nationality'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" name="email" class="form-control" value="{{isset($data['email'])? $data['email'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Sport (or other)</label>
                                    <input type="text" name="sport" class="form-control" value="{{isset($data['sport'])? $data['sport'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Discipline</label>
                                    <input type="text" name="discipline" class="form-control" value="{{isset($data['discipline'])? $data['discipline'] : ''}}">
                                </div>
                            </div>
                            
                            <h3 class="form_header_2">BUDGET PROPOSAL</h3>
                            N.B.: Experts’ expenses (per diem + international travel) should not be taken into consideration
when establishing the estimated expenditure.
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Requestedbudget(if different from the estimated expenditure) USD</label>
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Has your NF already submitted all the relevant technical details to its respective IF?</label>
                                    <input type="radio" id="suggested_level" name="relevant_technical_details"  value="yes" {{isset($data['relevant_technical_details']) && $data['relevant_technical_details']  =="yes" ? 'checked' : ''}} >
                                    <label for="1">Yes</label>
                                    <input type="radio" id="suggested_level" name="relevant_technical_details" value="no" {{isset($data['relevant_technical_details']) && $data['relevant_technical_details']  == "no" ? 'checked' : ''}}>
                                    <label for="2">No</label>
                                </div>
                            </div>

                            
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && $dataUserApplications['status'] == 'request not completed')))
                                @if(isset($data))
                                <button type="submit" class="btn btn-primary">@lang('custom.update')</button>
                                @else
                                <button type="submit" class="btn btn-primary">@lang('custom.save')</button>
                                @endif
                            @endif
                        </div>
                    </form>
                </div>

            </div>
            {{--
            @if (\Auth::user()->hasAnyRole(['Super Admin', 'Admin']) && (isset($dataUserApplications) && $dataUserApplications['status'] != 'accepted'))
            <div style="display: none;" class="col-md-12">
                <div class="card card-primary">
                    <form role="form" id="quickForm" method="POST" action="{{ url('/forms/save_feedback') }}">
                        @csrf

                        @if(isset($dataUserApplications))
                        <input type="hidden" name="dataUserApplicationsId" value="{{$dataUserApplications['id']}}" />
                        @endif

                        <div class="card-body">
                            <div class="form-group col-md-12">
                                <input type="hidden" name="id" class="form-control"  value="{{isset($dataUserApplications) && $dataUserApplications['id'] ? $dataUserApplications['id'] : ""}}">
                            </div>
                            
                            @if (\Auth::user()->hasAnyRole(['Super Admin']))
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label>FeedBack</label>
                                    <textarea id="feedback" class="form-control" name="feedback" rows="3" placeholder="Enter ...">{{isset($dataUserApplications) && $dataUserApplications['feedback'] ? $dataUserApplications['feedback'] : "" }}</textarea>
                                </div>
                            </div>
                            @endif

                            @if (\Auth::user()->hasAnyRole(['Admin']))
                            <div class="col-md-12 row" style="display: block;" id="remark_div">
                                <div class="form-group col-md-12">
                                    <label>Remark</label>
                                    <textarea id="remark" class="form-control" name="remark" rows="3" placeholder="Enter ...">{{isset($dataUserApplications)&& $dataUserApplications['remark']? $dataUserApplications['remark'] : ""}}</textarea>
                                </div>
                            </div>
                            @endif

                            <div class="card-footer">
                                @if (\Auth::user()->hasRole('Super Admin'))
                                <a href="javascript:;" class="btn btn-primary btn-sm check_appoved" data-id = "{{$dataUserApplications['id']}}">Accept</a>
                                <a href="javascript:;" class="btn btn-danger btn-sm check_reject" data-id = "{{$dataUserApplications['id']}}">Reject</a>
                                @endif

                                @if (\Auth::user()->hasRole('Admin') && $dataUserApplications['status'] == 'under review')
                                <a href="javascript:;" class="btn btn-primary btn-sm check_appoved" data-id = "{{$dataUserApplications['id']}}">Accept Temporary</a>
                                <a href="javascript:;" class="btn btn-danger btn-sm check_reject" data-id = "{{$dataUserApplications['id']}}">Reject</a>
                                <a href="javascript:;" class="btn btn-warning btn-sm check_change_request" data-id = "{{$dataUserApplications['id']}}">Request Change on Forms</a>
                                @endif
                                <!-- <button type="submit" class="btn btn-primary">@lang('custom.save')</button> -->
                            </div>

                        </div>
                    </form>
                </div>

            </div>
            @endif
            --}}
        </div>

    </div>
</section>