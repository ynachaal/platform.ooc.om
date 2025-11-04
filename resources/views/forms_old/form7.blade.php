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
                                <input type="hidden" name="application_id" class="form-control" placeholder="Committee Name" value="{{$application_id}}">
                            </div>
                            
                            <h3 class="form_header_2">Personal details</h3>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">The Name in Arabic</label>
                                    <input type="text" name="name_arabic" class="form-control" value="{{isset($data['name_arabic'])? $data['name_arabic'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">The Name in English</label>
                                    <input type="text" name="name_english" class="form-control" value="{{isset($data['name_english'])? $data['name_english'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Date of birth</label>
                                    <input type="date" name="date_of_birth" class="form-control" value="{{isset($data['date_of_birth'])? $data['date_of_birth'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Nationality</label>
                                    <input type="text" name="nationality" class="form-control" value="{{isset($data['nationality'])? $data['nationality'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Gender:</label>
                                    <input type="radio" id="male" name="gender"  value="male" {{isset($data['gender']) && $data['gender']  == "male" ? 'checked' : ''}} >
                                    <label for="male">Male</label>
                                    <input type="radio" id="female" name="gender" value="female" {{isset($data['gender']) && $data['gender']  == "female" ? 'checked' : ''}}>
                                    <label for="female">Female</label>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Marital status:</label>
                                    <input type="radio" id="single" name="marital_status"  value="single" {{isset($data['marital_status']) && $data['marital_status']  == "single" ? 'checked' : ''}} >
                                    <label for="single">Single</label>
                                    <input type="radio" id="married" name="marital_status" value="married" {{isset($data['marital_status']) && $data['marital_status']  == "married" ? 'checked' : ''}}>
                                    <label for="married">Married</label>
                                </div>
                            </div>
                            
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Telephone</label>
                                    <input type="number" name="telephone" class="form-control"  value="{{isset($data['telephone'])? $data['telephone'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">E-mail</label>
                                    <input type="email" name="email" class="form-control"  value="{{isset($data['email'])? $data['email'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Residence (city, country)</label>
                                    <input type="text" name="residence" class="form-control" value="{{isset($data['residence'])? $data['residence'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">(Optional) – Other means of communication such as Skype,FB, Twitter, Instagram</label>
                                    <input type="text" name="other_communication" class="form-control"  value="{{isset($data['other_communication'])? $data['other_communication'] : ''}}">
                                </div>
                            </div>
                            <h3 class="form_header_2">Qualifications</h3>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Qualification</label>
                                    <input type="text" name="qualification" class="form-control" value="{{isset($data['qualification'])? $data['qualification'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Function</label>
                                    <input type="text" name="function" class="form-control" value="{{isset($data['function'])? $data['function'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Years of Experience</label>
                                    <input type="text" name="years_of_experience" class="form-control" value="{{isset($data['years_of_experience'])? $data['years_of_experience'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">The language</label>
                                    <input type="text" name="language" class="form-control" value="{{isset($data['language'])? $data['language'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Attachments A copy of the identity card Qualification Nomination letter(In Progress)</label>
                                    <input type="text" name="previous_olympic_participation" class="form-control" value="{{isset($data['previous_olympic_participation'])? $data['previous_olympic_participation'] : ''}}">
                                </div>
                            </div>
                        </div>
                         
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

            
        </div>

    </div>
</section>