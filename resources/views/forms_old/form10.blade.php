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
                        <h4>coming soon</h4>
<!--                        <div class="card-body">
                            <div class="form-group col-md-6">
                                <input type="hidden" name="application_id" class="form-control" placeholder="Committee Name" value="{{$application_id}}">
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
                                    <input type="text" name="sport" class="form-control" value="{{isset($data['family_name'])? $data['family_name'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Passport – No.(to be annexed)</label>
                                    <input type="text" name="passport_no" class="form-control" placeholder="Passport – No." value="{{isset($data['passport_no'])? $data['passport_no'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Gender:</label>
                                    <input type="radio" id="male" name="gender"  value="male" {{isset($data) && $data['gender']  == "male" ? 'checked' : ''}} >
                                    <label for="male">Male</label>
                                    <input type="radio" id="female" name="gender" value="female" {{isset($data) && $data['gender']  == "female" ? 'checked' : ''}}>
                                    <label for="female">Female</label>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Marital status:</label>
                                    <input type="radio" id="male" name="marital_status"  value="single" {{isset($data) && $data['marital_status']  == "single" ? 'checked' : ''}} >
                                    <label for="male">Single</label>
                                    <input type="radio" id="female" name="marital_status" value="married" {{isset($data) && $data['marital_status']  == "married" ? 'checked' : ''}}>
                                    <label for="female">Married</label>
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Telephone</label>
                                    <input type="number" name="telephone" class="form-control" placeholder="Telephone" value="{{isset($data['telephone'])? $data['telephone'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">E-mail</label>
                                    <input type="email" name="email" class="form-control" placeholder="E-mail" value="{{isset($data['email'])? $data['email'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Residence (city, country)</label>
                                    <input type="text" name="residence" class="form-control" placeholder="Residence " value="{{isset($data['residence'])? $data['residence'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">(Optional) – Other means of communication such as Skype,FB, Twitter, Instagram</label>
                                    <input type="text" name="other_communication" class="form-control" placeholder="Skype,FB, Twitter, Instagram" value="{{isset($data['other_communication'])? $data['other_communication'] : ''}}">
                                </div>
                            </div>
                            <h3 class="form_header_2">Sporting Details</h3>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Individual Olympic Sport (e.g. taekwondo)</label>
                                    <input type="text" name=individual_olympic_sport" class="form-control" value="{{isset($data['individual_olympic_sport'])? $data['individual_olympic_sport'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Discipline(s) / Event(s)</label>
                                    <input type="text" name=discipline" class="form-control" value="{{isset($data['discipline'])? $data['discipline'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">National Ranking</label>
                                    <input type="text" name="national_ranking" class="form-control" value="{{isset($data['national_ranking'])? $data['national_ranking'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">International Ranking</label>
                                    <input type="text" name="international_ranking" class="form-control"  value="{{isset($data['international_ranking'])? $data['international_ranking'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Previous Olympic Participation (Games & year)</label>
                                    <input type="text" name="previous_olympic_participation" class="form-control" value="{{isset($data['previous_olympic_participation'])? $data['previous_olympic_participation'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Primary sporting achievement(s) (Result, PB, competition and date)</label>
                                    <div class="mb-3">
                                        <textarea class="textarea"  name ="primary_sporting_achievement" 
                                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{isset($data['primary_sporting_achievement']) ? $data['primary_sporting_achievement'] : ''}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Training location</label>
                                    <input type="text" name="training_location" class="form-control" value="{{isset($data['training_location'])? $data['training_location'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Has the candidate benefited from one of the following Olympic Solidarity programmes?</label><br>
                                    <label class="form-check-label">Olympic scholarships for athletes London 2012, Rio 2016 or ( ………………..)</label>
                                    <input class="form-check-input" type="radio" name="olympic_scholarships" value="Yes" checked>Yes
                                    <input class="form-check-input" type="radio" name="olympic_scholarships" value="No" checked>No
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label class="form-check-label">Youth Olympic Games – Athlete Preparation (Singapore 2010,Nanjing 2014) or ( ……………………………….)</label>
                                    <input class="form-check-input" type="radio" name="youth_olympic_games" value="Yes" checked>Yes
                                    <input class="form-check-input" type="radio" name="youth_olympic_games" value="No" checked>No
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label class="form-check-label">For your candidate which option does your NOC prefer?</label>
                                    <input class="form-check-input" type="radio" name=" NOC_prefer" value="Yes" checked>Noc traning
                                    <input class="form-check-input" type="radio" name="NOC_prefer" value="No" checked>OS Hign level traning center
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Candidate’s background and motivation for a scholarship</label>
                                    <textarea class="form-control" name="candidate_background" rows="3" placeholder="(To be completed by the athlete)">{{isset($data['candidate_background']) ? $data['candidate_background'] : ''}}</textarea>
                                </div>
                            </div>
                            <h3 class="form_header_2">UNDERTAKINGS</h3>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label class="form-check-label">Copy of valid passport enclosed</label>
                                    <input class="form-check-input" type="radio" name=" valid_passport_enclosed" value="Yes" checked>Yes
                                    <input class="form-check-input" type="radio" name="valid_passport_enclosed" value="No" checked>No
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Nationality - please explain whether there are any particular circumstances that Olympic Solidarity should be aware of, for example dual nationality, recent change of nationality etc.:</label>
                                    <textarea class="form-control" name="nationality_exp" rows="3">{{isset($data['nationality_exp']) ? $data['nationality_exp'] : ''}}</textarea>
                                </div>
                            </div>
                            <h3 class="form_header_2">BUDGET PROPOSAL</h3>

                            <h4 class="form_header_2">Medical condition and responsibility:</h4>
                            <ul>
                                <li>there is no medical issue likely to prevent the scholarship candidate from undertaking intensive 
                                    physical training in view of the Olympic Games Tokyo 2020.</li>
                                <li>all necessary measures will be taken to ensure appropriate and regular medical follow-up</li>
                                <li>signature bearers assume full responsibility for the above statements.</li>
                            </ul>
                            
                            <h4 class="form_header_2">Athlete Profile</h4>
                            A Tokyo scholarship will make a significant difference to the athlete’s training and he/she does not 
have access to alternative means of paying for such training.
                            
                            <h4 class="form_header_2">CANDIDATE</h4>
                            I, the undersigned, would like to propose my candidature for a “Tokyo 2020” Olympic scholarship and 
                            hereby certify that the information provided herein is accurate:
                            <hr>
                            Name and signature:
                            Date:
                            
                            <h4 class="form_header_2">NATIONAL FEDERATION</h4>
                            I, the undersigned, on behalf of the National Federation of _________________________ hereby certify 
that the information provided herein is accurate:
                            <hr>
                            Name, function and signature:
                            Date:

                        </div>-->
                        <!-- /.card-body -->
<!--                        <div class="card-footer">
                            @if (\Auth::user()->hasAnyRole(['User']))
                            @if(isset($data))
                            <button type="submit" class="btn btn-primary">@lang('custom.update')</button>
                            @else
                            <button type="submit" class="btn btn-primary">@lang('custom.save')</button>
                            @endif
                            @endif
                        </div>-->
                    </form>
                </div>

            </div>

            @if (\Auth::user()->hasAnyRole(['Super Admin', 'Admin']))
<!--            <div class="col-md-12">
                <div class="card card-primary">
                    <form role="form" id="quickForm" method="POST" action="{{ url('/forms/save_feedback') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group col-md-12">
                                <input type="hidden" name="id" class="form-control"  value="{{isset($dataUserApplications) && $dataUserApplications['id'] ? $dataUserApplications['id'] : ""}}">
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label>FeedBack</label>
                                    <textarea class="form-control" name="feedback" rows="3" placeholder="Enter ...">
                                       {{isset($dataUserApplications) && $dataUserApplications['feedback'] ? $dataUserApplications['feedback'] : "" }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <label>Remark</label>
                                    <textarea class="form-control" name="remark" rows="3" placeholder="Enter ...">
                                        {{isset($dataUserApplications)&& $dataUserApplications['remark']? $dataUserApplications['remark'] : ""}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">@lang('custom.save')</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>-->
            @endif
        </div>

    </div>
</section>