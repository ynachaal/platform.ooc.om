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
                            <h3 class="form_header_2">DEVELOPMENT PLAN</h3>
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
                                    <label for="exampleInputEmail1">Name of the project (if any)</label>
                                    <input type="text" name="name_of_the_project" class="form-control" value="{{isset($data['name_of_the_project'])? $data['name_of_the_project'] : ''}}">
                                </div>
                            </div>

                            <h3 class="form_header_2">CURRENT SPORT STRUCTURE</h3>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Summary of the current level</label>
                                    <textarea class="form-control" name="summary_of_the_current_level" rows="5">
                                       {{isset($data) && $data['summary_of_the_current_level'] ? $data['summary_of_the_current_level'] : "" }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Weak points</label>
                                    <textarea class="form-control" name="weak_points" rows="3">
                                       {{isset($data) && $data['weak_points'] ? $data['weak_points'] : "" }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Strong points</label>
                                    <textarea class="form-control" name="strong_points" rows="4">
                                       {{isset($data) && $data['strong_points'] ? $data['strong_points'] : "" }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Analysis of requirements</label>
                                    <textarea class="form-control" name="Analysis_of_requirements" rows="3">
                                       {{isset($data) && $data['Analysis_of_requirements'] ? $data['Analysis_of_requirements'] : "" }}
                                    </textarea>
                                </div>
                            </div>

                            <h3 class="form_header_2">ACTION AND OBJECTIVES</h3>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Action plan proposed</label>
                                    <textarea class="form-control" name="Action_plan_proposed" rows="10">
                                       {{isset($data) && $data['Action_plan_proposed'] ? $data['Action_plan_proposed'] : "" }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Objectives / expected results</label>
                                    <textarea class="form-control" name="expected_results" rows="10">
                                       {{isset($data) && $data['expected_results'] ? $data['expected_results'] : "" }}
                                    </textarea>
                                </div>
                            </div>
                            <h3 class="form_header_2">PLANNING</h3>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Length of the programme</label>
                                    <br>Start date
                                    <input type="date" name="length_programme_start_date" class="form-control" value="{{isset($data['length_programme_start_date'])? $data['length_programme_start_date'] : ''}}">
                                    End date
                                    <input type="date" name="length_programme_end_date" class="form-control" value="{{isset($data['length_programme_end_date'])? $data['length_programme_end_date'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Visit(s) by expert (if staggered)</label>
                                    
                                </div>
                            </div>

                            <h3 class="form_header_2">BUDGET PROPOSAL</h3>
                            N.B.: International expert’s expenses (air ticket(s) and indemnities, etc.) must be included in the estimated expenditure below.

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

                            <h3 class="form_header_2">PROPOSED EXPERT</h3>

                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Family name</label>
                                    <input type="text" name="family_name" class="form-control"  value="{{isset($data['family_name'])? $data['family_name'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Given name(s)</label>
                                    <input type="text" name="given_name" class="form-control"  value="{{isset($data['given_name'])? $data['given_name'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Date of birth</label>
                                    <input type="date" name="date_of_birth" class="form-control" placeholder="Date of birth" value="{{isset($data['date_of_birth'])? $data['date_of_birth'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Nationality</label>
                                    <input type="text" name="nationality" class="form-control" placeholder="Nationality" value="{{isset($data['nationality'])? $data['nationality'] : ''}}">
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
                                    <label for="exampleInputEmail1">Current level</label>
                                    <input type="text" name="current_level" class="form-control"  value="{{isset($data['current_level'])? $data['current_level'] : ''}}">
                                </div>
                            </div>

                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Residence(city, country)</label>
                                    <input type="text" name="residence" class="form-control" value="{{isset($data['residence'])? $data['residence'] : ''}}">
                                </div>
                                <div class="form-group col-md-6 row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="text" name="email" class="form-control" value="{{isset($data['email'])? $data['email'] : ''}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Telephone</label>
                                        <input type="text" name="telephone" class="form-control"  value="{{isset($data['telephone'])? $data['telephone'] : ''}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Mobile</label>
                                        <input type="text" name="mobile" class="form-control"  value="{{isset($data['mobile'])? $data['mobile'] : ''}}">
                                    </div>
                                </div>
                            </div>
                            <h3 class="form_header_2">EDUCATION & DIPLOMAS</h3>
                            baki
                            <h3 class="form_header_2">SPORTS EXPERIENCE</h3>
                            baki 
                            <h3 class="form_header_2">NATIONAL COORDINATOR (IF ALREADY KNOWN)</h3>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Family name</label>
                                    <input type="text" name=national_coordinator_family_name" class="form-control" value="{{isset($data['national_coordinator_family_name'])? $data['national_coordinator_family_name'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Given name(s)</label>
                                    <input type="text" name=national_coordinator_given_name" class="form-control" value="{{isset($data['national_coordinator_given_name'])? $data['national_coordinator_given_name'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Nationality</label>
                                    <input type="text" name=national_coordinator_nationality" class="form-control" value="{{isset($data['national_coordinator_nationality'])? $data['national_coordinator_nationality'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Title within the NF or NOC</label>
                                    <input type="text" name=national_coordinator_title_within" class="form-control" value="{{isset($data['national_coordinator_title_within'])? $data['national_coordinator_title_within'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" name=national_coordinator_email" class="form-control" value="{{isset($data['national_coordinator_email'])? $data['national_coordinator_email'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Mobile</label>
                                    <input type="text" name=national_coordinator_mobile" class="form-control" value="{{isset($data['national_coordinator_mobile'])? $data['national_coordinator_mobile'] : ''}}">
                                </div>
                            </div>
                            <h3 class="form_header_2">ATTACHMENTS REQUIRED</h3>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <input class="" type="checkbox" name="detailed_action_plan" id="detailed_action_plan" value="detailed_action_plan" {{isset($data['detailed_action_plan']) && $data['detailed_action_plan']  =="detailed_action_plan" ? 'checked' : ''}}>
                                    <label for="detailed_action_plan">Detailed action plan</label>
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <input class="" type="checkbox" name="overall_and_detailed_budget" id="overall_and_detailed_budget" value="overall_and_detailed_budget" {{isset($data['overall_and_detailed_budget']) && $data['overall_and_detailed_budget']  =="overall_and_detailed_budget" ? 'checked' : ''}}>
                                    <label for="overall_and_detailed_budget">Overall and detailed budget</label>
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <input class="" type="checkbox" name="curriculum_vitae_proposed_expert" id="curriculum_vitae_proposed_expert" value="curriculum_vitae_proposed_expert" {{isset($data['curriculum_vitae_proposed_expert']) && $data['curriculum_vitae_proposed_expert']  =="curriculum_vitae_proposed_expert" ? 'checked' : ''}}>
                                    <label for="curriculum_vitae_proposed_expert">Curriculum Vitae of the proposed expert (where applicable)</label>
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <input class="" type="checkbox" name="acceptance_letter_from_the_expert" id="acceptance_letter_from_the_expert" value="acceptance_letter_from_the_expert" {{isset($data['acceptance_letter_from_the_expert']) && $data['acceptance_letter_from_the_expert']  =="acceptance_letter_from_the_expert" ? 'checked' : ''}}>
                                    <label for="acceptance_letter_from_the_expert">Acceptance letter from the expert</label>
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

        </div>

    </div>
</section>