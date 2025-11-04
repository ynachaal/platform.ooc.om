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
                <h1>technical courses for coaches</h1>
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
                            <p>IMPORTANT: This form should be sent to Olympic Solidarity no later than 3 months before the intended period of the course. The IF may ask for the chosen period to be changed depending on the availability of the expert or other course-related parameters.</p>
                            <p>يجب ارسال هذا الطلب قبل مدة لا تقل عن 3 اشهر من الموعد المحدد لتنفيذ البرنامج</p>
                            <h3 class="form_header_2">COURSE DETAILS</h3>
                            <div class="form-group col-md-12" style="margin-top: 20px;">
                                <label for="exampleInputEmail1">Sport (or other) الرياضة</label>
                                <input type="text" name="sport" class="form-control" placeholder="Sport (or other)" value="{{isset($data['sport'])? $data['sport'] : ''}}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Discipline التخصص</label>
                                <input type="text" name="discipline" class="form-control" placeholder="Discipline" value="{{isset($data['discipline'])? $data['discipline'] : ''}}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Proposed dates الفترة</label>
                                <div class="row">
                                    <div class="col-md-5 row">
                                        <label style="margin-right: 20px;" for="proposed_dates_from"> from من</label>
                                        <input type="date" id="proposed_dates_from" name="proposed_dates_from" class="form-control col-md-8" style="margin-right: 20px;"  value="{{isset($data['proposed_dates_from'])? $data['proposed_dates_from'] : ''}}" >
                                    </div>
                                    <div class="ml-2 mr-2 col-md-5 row">
                                        <label style="margin-right: 20px;" for="proposed_dates_to">to إلى</label>
                                        <input type="date" id="proposed_dates_to" name="proposed_dates_to" class="form-control col-md-8" style="margin-right: 20px;" value="{{isset($data['proposed_dates_to'])? $data['proposed_dates_to'] : ''}}">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Suggested level: المستوى</label>
                                    <input type="radio" id="suggested_level1" name="suggested_level" style="margin-right: 20px;"  value="suggested_level1" {{isset($data['suggested_level']) && $data['suggested_level']  == "suggested_level1" ? 'checked' : ''}} >
                                    <label for="suggested_level1">1</label>
                                    <input type="radio" id="suggested_leve2" name="suggested_level" value="suggested_level2" {{isset($data['suggested_level']) && $data['suggested_level']  == "suggested_level2" ? 'checked' : ''}}>
                                    <label for="suggested_level2">2</label>
                                    <input type="radio" id="suggested_leve3" name="suggested_level" value="suggested_level3" {{isset($data['suggested_level']) && $data['suggested_level']  == "suggested_level3" ? 'checked' : ''}}>
                                    <label for="suggested_level3">3</label>
                                    <input type="radio" id="suggested_leve4" name="suggested_level" value="suggested_level4" {{isset($data['suggested_level']) && $data['suggested_level']  == "suggested_level4" ? 'checked' : ''}}>
                                    <label for="suggested_level4">4</label>
                                    <input type="radio" id="suggested_leve5" name="suggested_level" value="suggested_level5" {{isset($data['suggested_level']) && $data['suggested_level']  == "suggested_level5" ? 'checked' : ''}}>
                                    <label for="suggested_level5">5</label>
                                </div>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-12">
                                    <span style="font-weight: 500; margin-top: 20px;">Number of participants عدد المشاركين</span>
                                    <div style="margin-top: 20px;" class="row">
                                        <div class="">
                                            <label for="men">Men رجال</label>
                                            <input type="text" id="men" name="men" class="form-control"  value="{{isset($data['men'])? $data['men'] : ''}}" >
                                        </div>
                                        <div class="mr-2 ml-2">
                                            <label for="women">Women نساء</label>
                                            <input type="text" id="women" name="women" class="form-control"  value="{{isset($data['women'])? $data['women'] : ''}}" >
                                        </div>
                                        <div class="mr-2 ml-2">
                                            <label for="total">Total لاجمالي</label>
                                            <input type="text" id="total" name="total" class="form-control"  value="{{isset($data['total'])? $data['total'] : ''}}" >
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <h3 class="form_header_2" style="margin-top: 20px;">Technical Information المعلومات الفنية </h3>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1" style="margin-top: 20px;">Programme Contents (summary) ( محتويات البرنامج (ملخص</label>
                                <textarea class="form-control"  name ="programme_contents" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{isset($data['programme_contents']) ? $data['programme_contents'] : ''}}</textarea>
                            </div>
                            <div class="col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">City المدينة</label>
                                    <input type="text" name="city" class="form-control" placeholder="City" value="{{isset($data['city'])? $data['city'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Venue المكان</label>
                                    <input type="text" name="venue" class="form-control" placeholder="Venue" value="{{isset($data['venue'])? $data['venue'] : ''}}">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Materials Available المواد والأدوات المتاحة</label>
                                <textarea class="form-control"  name ="materials_available" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{isset($data['materials_available']) ? $data['materials_available'] : ''}}</textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Other information  بيانات أخرى </label>
                                <textarea class="form-control"  name ="other_information" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{isset($data['other_information']) ? $data['other_information'] : ''}}</textarea>
                            </div>
                            <h3 class="form_header_2" style="margin-top: 20px;">Proposed expert الخبير المقترح</h3>
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
                                    <label for="exampleInputEmail1">Nationality الجنسية</label>
                                    <input type="text" name="nationality" class="form-control" placeholder="Nationality" value="{{isset($data['nationality'])? $data['nationality'] : ''}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">E-mail البريد الالكتروني</label>
                                    <input type="email" name="email" class="form-control" placeholder="E-mail" value="{{isset($data['email'])? $data['email'] : ''}}">
                                </div>
                            </div>
                            <h3 class="form_header_2" style="margin-top: 20px;">Budget Proposal التصور العام للموازنة</h3>
                            <p style="margin-top: 20px;">N.B.: Experts’ expenses (per diem + international travel) should not be taken into consideration when establishing the estimated expenditure.  ملاحظة: لا ينبغي أن تؤخذ في الاعتبار نفقات الخبراء (بدل يومي + السفر الدولي)
عند تحديد النفقات المقدرة</p>
                            <table style="margin-top: 20px;">
                                <tr>
                                    <th>Type of expenditure البند</th>
                                    <th>Budget (OMR) المبلغ</th>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="budget_proposal[0]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['budget_proposal'][0])? $data['budget_proposal'][0] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[0]" class="budget border-0" value="{{isset($data['budget'][0])? $data['budget'][0] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="budget_proposal[1]" class="budget_proposal border-0" value="{{isset($data['budget_proposal'][1])? $data['budget_proposal'][1] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[1]" class="budget border-0" value="{{isset($data['budget'][1])? $data['budget'][1] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="budget_proposal[2]" class="budget_proposal border-0" value="{{isset($data['budget_proposal'][2])? $data['budget_proposal'][2] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[2]" class="budget border-0" value="{{isset($data['budget'][2])? $data['budget'][2] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="budget_proposal[3]" class="budget_proposal border-0" value="{{isset($data['budget_proposal'][3])? $data['budget_proposal'][3] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[3]" class="budget border-0" value="{{isset($data['budget'][3])? $data['budget'][3] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="budget_proposal[4]" class="budget_proposal border-0" value="{{isset($data['budget_proposal'][4])? $data['budget_proposal'][4] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[4]" class="budget border-0" value="{{isset($data['budget'][4])? $data['budget'][4] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="budget_proposal[5]" class="budget_proposal border-0" value="{{isset($data['budget_proposal'][5])? $data['budget_proposal'][5] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[5]" class="budget border-0" value="{{isset($data['budget'][5])? $data['budget'][5] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="budget_proposal[6]" class="budget_proposal border-0" value="{{isset($data['budget_proposal'][6])? $data['budget_proposal'][6] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[6]" class="budget border-0" value="{{isset($data['budget'][6])? $data['budget'][6] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="budget_proposal[7]" class="budget_proposal border-0" value="{{isset($data['budget_proposal'][7])? $data['budget_proposal'][7] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[7]" class="budget border-0" value="{{isset($data['budget'][7])? $data['budget'][7] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="budget_proposal[8]" class="budget_proposal border-0" value="{{isset($data['budget_proposal'][8])? $data['budget_proposal'][8] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[8]" class="budget border-0" value="{{isset($data['budget'][8])? $data['budget'][8] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="budget_proposal[9]" class="budget_proposal border-0" value="{{isset($data['budget_proposal'][9])? $data['budget_proposal'][9] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[9]" class="budget border-0" value="{{isset($data['budget'][9])? $data['budget'][9] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="budget_proposal[10]" class="budget_proposal border-0" value="{{isset($data['budget_proposal'][10])? $data['budget_proposal'][10] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[10]" class="budget border-0" value="{{isset($data['budget'][10])? $data['budget'][10] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="budget_proposal[11]" class="budget_proposal border-0" value="{{isset($data['budget_proposal'][11])? $data['budget_proposal'][11] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="budget[11]" class="budget border-0" value="{{isset($data['budget'][11])? $data['budget'][11] : ''}}"></td>
                                </tr>
                            </table>
                            <div class="col-md-12 row" style="margin-top: 20px;">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Has your NF already submitted all the relevant technical details to its respective IF? هل تم التنسيق مع الاتحاد الدولي المعني حول تفاصيل طلب هذه الدورة</label>
                                    <input type="radio" id="yes" name="technical_details"  value="yes" {{isset($data['technical_details']) && $data['technical_details']  == "yes" ? 'checked' : ''}} >
                                    <label for="yes">Yes</label>
                                    <input type="radio" id="no" name="technical_details" value="no" {{isset($data['technical_details']) && $data['technical_details']  == "no" ? 'checked' : ''}}>
                                    <label for="no">No</label>
                                </div>
                            </div>
                            <p>يرفق الطلب مع رسالة تغطية من الاتحاد / اللجنة ويتم تحميلها عبر النظام ويتم ارسال الأصل الى البريد الرسمي للجنة الأولمبية العمانية موجهة الى الأمين العام</p>


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