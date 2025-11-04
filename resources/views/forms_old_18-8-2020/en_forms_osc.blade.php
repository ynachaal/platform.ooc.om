<style>
    table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: black;
  color: white;
}
.budget_proposal{
    width: 100%;
}
.budget{
    width: 100%;
}
</style>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>EN_Forms_OSC- المنح الأولمبية للمدربين</h1>
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
                        <h3 class="card-title">الرجاء تعبئة البيانات المطلوبة في الإستمارة</h3>
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
                            <p>IMPORTANT: This form duly completed and signed along with the documents indicated under “Attachments required” should be sent to Olympic Solidarity no later than 2 months before the start of the training. يجب ارسال هذا الطلب قبل مدة لا تقل عن شهرين من الموعد المحدد لتنفيذ البرنامج</p>
                            
                            <h3 class="form_header_2">CANDIDATE INFORMATION بيانات المرشح </h3>
                            <div class="col-md-12 row" style="margin-top: 20px;">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Family Name اسم العائلة</label>
                                    <input type="text" name="family_name" class="form-control" placeholder="Family Name" value="{{isset($data['family_name'])? $data['family_name'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Given Name(s) الاسم الأول</label>
                                    <input type="text" name="given_name" class="form-control" placeholder="Given Name" value="{{isset($data['given_name'])? $data['given_name'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Date of Birth تاريخ الميلاد </label>
                                    <input type="date" name="date_of_birth" class="form-control"  value="{{isset($data['date_of_birth'])? $data['date_of_birth'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Nationality الجنسية</label>
                                    <input type="text" name="nationality" class="form-control" placeholder="Nationality" value="{{isset($data['nationality'])? $data['nationality'] : ''}}">
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Marital Statusالحالة الاجتماعية</label>
                                    <input type="radio" id="male" name="marital_status"  value="single" {{isset($data['marital_status']) && $data['marital_status']  == "single" ? 'checked' : ''}} >
                                    <label for="male">Single</label>
                                    <input type="radio" id="female" name="marital_status" value="married" {{isset($data['marital_status']) && $data['marital_status']  == "married" ? 'checked' : ''}}>
                                    <label for="female">Married</label>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Genderالجنس</label>
                                    <input type="radio" id="male" name="gender"  value="male" {{isset($data['gender']) && $data['gender']  == "male" ? 'checked' : ''}} >
                                    <label for="male">Male</label>
                                    <input type="radio" id="female" name="gender" value="female" {{isset($data['gender']) && $data['gender']  == "female" ? 'checked' : ''}}>
                                    <label for="female">Female</label>
                                </div>
                            </div>
                            <div class="col-md-12 row" style="margin-top: 20px;">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Residence الإقامة (المدينة / الدولة) (city, country)</label>
                                    <input type="text" name="residence" class="form-control" placeholder="Residence" value="{{isset($data['residence'])? $data['residence'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Emailالبريد الالكتروني </label>
                                        <input type="email" name="email" class="form-control" placeholder="Email" value="{{isset($data['email'])? $data['email'] : ''}}">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Telephoneالهاتف  </label>
                                        <input type="number" name="telephone" class="form-control" placeholder="Telephone" value="{{isset($data['telephone'])? $data['telephone'] : ''}}">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Mobileالجوال </label>
                                        <input type="number" name="mobile" class="form-control" placeholder="Mobile" value="{{isset($data['mobile'])? $data['mobile'] : ''}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12" style="margin-top: 20px;">
                                <label for="exampleInputEmail1">Sport (or other) الرياضة</label>
                                <input type="text" name="sport" class="form-control" placeholder="Sport (or other)" value="{{isset($data['sport'])? $data['sport'] : ''}}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Discipline التخصص</label>
                                <input type="text" name="discipline" class="form-control" placeholder="Discipline" value="{{isset($data['discipline'])? $data['discipline'] : ''}}">
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Active coachمدرب نشط </label>
                                    <input type="radio" id="yes" name="active_coach" style="margin-right: 20px;"  value="yes" {{isset($data['active_coach']) && $data['active_coach']  == "yes" ? 'checked' : ''}} >
                                    <label for="yes">yes</label>
                                    <input type="radio" id="no" name="active_coach" value="no" {{isset($data['active_coach']) && $data['active_coach']  == "no" ? 'checked' : ''}}>
                                    <label for="no">No</label>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Latest اخر نشاط activity</label>
                                    <input type="date" id="latest_activity" name="latest_activity" class="form-control"   value="{{isset($data['latest_activity'])? $data['latest_activity'] : ''}}" >
                                </div>
                            </div>
                            
                            
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Current Levelالمستوى الحالي</label>
                                    <input type="radio" id="current_level1" name="current_level" style="margin-right: 20px;"  value="current_level1" {{isset($data['current_level']) && $data['current_level']  == "current_level1" ? 'checked' : ''}} >
                                    <label for="current_level1">Level 1 (Coaching assistant)</label>
                                    <input type="radio" id="current_level2" name="current_level" value="current_level2" {{isset($data['current_level']) && $data['current_level']  == "current_level2" ? 'checked' : ''}}>
                                    <label for="current_leve2">Level 2 (Coach)</label>
                                    <input type="radio" id="current_level3" name="current_level" value="current_level3" {{isset($data['current_level']) && $data['current_level']  == "current_level3" ? 'checked' : ''}}>
                                    <label for="current_level3">Level 3 (advanced/senior coach)</label>
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-check-input" type="checkbox" name="sport_for_all" value="sport_for_all" {{isset($data['sport_for_all']) && $data['sport_for_all']  =="sport_for_all" ? 'checked' : ''}}>Sport for All
                                    <input class="form-check-input" type="checkbox" name="elite_sport" value="elite_sport" {{isset($data['elite_sport']) && $data['elite_sport']  =="elite_sport" ? 'checked' : ''}}>Elite Sport
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