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
.form-check-input {
    position: static;
    margin-right: 10px;
    margin-top: 8px;
}
</style>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Oman Olympic Committee</h1>
                <h1>Department of Olympic Solidarity</h1>
                
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
                            
                            <h3 class="form_header_2" style="margin-top: 20px;">بيانات المرشح</h3>
                            <div class="form-group col-md-12" style="margin-top: 20px;">
                                <label for="exampleInputEmail1">الاسم الثلاثي  مع العائلة</label>
                                <input type="text" name="full_name_with_family" class="form-control" placeholder="الاسم الثلاثي  مع العائلة" value="{{isset($data['full_name_with_family'])? $data['full_name_with_family'] : ''}}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">العمر</label>
                                <input type="text" name="age" class="form-control" placeholder="العمر" value="{{isset($data['age'])? $data['age'] : ''}}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">الصفـــــــة (لاعب /مدرب/إداري)</label>
                                <input type="text" name="user_class" class="form-control" placeholder="الصفـــــــة (لاعب /مدرب/إداري)" value="{{isset($data['user_class'])? $data['user_class'] : ''}}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">الوظيفة</label>
                                <input type="text" name="occupation" class="form-control" placeholder="الوظيفة" value="{{isset($data['occupation'])? $data['occupation'] : ''}}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">العنوان (المنطقة /الولاية)</label>
                                <input type="text" name="address" class="form-control" placeholder="العنوان (المنطقة /الولاية)" value="{{isset($data['address'])? $data['address'] : ''}}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">رقــــــــــم التواصــــــــل</label>
                                <input type="text" name="contact_number" class="form-control" placeholder="رقــــــــــم التواصــــــــل" value="{{isset($data['contact_number'])? $data['contact_number'] : ''}}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">البريـــــــد الالكترونــــــي</label>
                                <input type="text" name="email" class="form-control" placeholder="البريـــــــد الالكترونــــــي" value="{{isset($data['email'])? $data['email'] : ''}}">
                            </div>
                            
                            <h3 class="form_header_2" style="margin-top: 20px;">المؤهلات العلمية</h3>
                            <table style="margin-top: 20px;">
                                <tr>
                                    <th>السنة</th>
                                    <th>المؤهل العلمي</th>
                                    <th>المؤسسة</th>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="year[0]" class="form-control border-0"  value="{{isset($data['year'][0])? $data['year'][0] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="qualification[0]" class="form-control border-0"  value="{{isset($data['qualification'][0])? $data['qualification'][0] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="enterprise[0]" class="form-control border-0"  value="{{isset($data['enterprise'][0])? $data['enterprise'][0] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="year[1]" class="form-control border-0"  value="{{isset($data['year'][1])? $data['year'][1] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="qualification[1]" class="form-control border-0"  value="{{isset($data['qualification'][1])? $data['qualification'][1] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="enterprise[1]" class="form-control border-0"  value="{{isset($data['enterprise'][1])? $data['enterprise'][1] : ''}}"></td>
                                </tr>
                            </table>
                            
                            <h3 class="form_header_2" style="margin-top: 20px;">الخبرات الرياضية</h3>
                            
                            <table style="margin-top: 20px;">
                                <tr>
                                    <th>السنة</th>
                                    <th>الخبرات</th>
                                    <th>المؤسسة</th>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="sports_year[0]" class="form-control border-0"  value="{{isset($data['sports_year'][0])? $data['sports_year'][0] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="experience[0]" class="form-control border-0"  value="{{isset($data['experience'][0])? $data['experience'][0] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="sports_enterprise[0]" class="form-control border-0"  value="{{isset($data['sports_enterprise'][0])? $data['sports_enterprise'][0] : ''}}"></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><input type="text" name="sports_year[1]" class="form-control border-0"  value="{{isset($data['sports_year'][1])? $data['sports_year'][1] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="experience[1]" class="form-control border-0"  value="{{isset($data['experience'][1])? $data['experience'][1] : ''}}"></td>
                                    <td class="p-0"><input type="text" name="sports_enterprise[1]" class="form-control border-0"  value="{{isset($data['sports_enterprise'][1])? $data['sports_enterprise'][1] : ''}}"></td>
                                </tr>
                            </table>

                            <h3 class="form_header_2" style="margin-top: 20px;">اللغة</h3>

                            <table style="margin-top: 20px;">
                                <tr>
                                    <th>اللغة</th>
                                    <th>Spokenالتحدث</th>
                                    <th>Writtenالكتابة</th>
                                    <th>Readالقراءة </th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <input type="radio" id="spoken1" name="spoken[0]" style="margin-right: 20px;"  value="1" {{isset($data['spoken'][0]) && $data['spoken'][0]  == "1" ? 'checked' : ''}} >
                                        <label for="spoken1">1</label>
                                        <input type="radio" id="spoken2" name="spoken[0]" value="2" {{isset($data['spoken'][0]) && $data['spoken'][0]  == "2" ? 'checked' : ''}}>
                                        <label for="spoken2">2</label>
                                        <input type="radio" id="spoken3" name="spoken[0]" value="3" {{isset($data['spoken'][0]) && $data['spoken'][0]  == "3" ? 'checked' : ''}}>
                                        <label for="spoken3">3</label>
                                        <input type="radio" id="spoken4" name="spoken[0]" value="4" {{isset($data['spoken'][0]) && $data['spoken'][0]  == "4" ? 'checked' : ''}}>
                                        <label for="spoken4">4</label>
                                        <input type="radio" id="spoken5" name="spoken[0]" value="5" {{isset($data['spoken'][0]) && $data['spoken'][0] == "5" ? 'checked' : ''}}>
                                        <label for="spoken5">5</label>
                                    </td>
                                    <td>
                                        <input type="radio" id="written1" name="written[0]" style="margin-right: 20px;"  value="1" {{isset($data['written'][0]) && $data['written'][0]  == "1" ? 'checked' : ''}} >
                                        <label for="written1">1</label>
                                        <input type="radio" id="written2" name="written[0]" value="2" {{isset($data['written'][0]) && $data['written'][0]  == "2" ? 'checked' : ''}}>
                                        <label for="written2">2</label>
                                        <input type="radio" id="written3" name="written[0]" value="3" {{isset($data['written'][0]) && $data['written'][0]  == "3" ? 'checked' : ''}}>
                                        <label for="written3">3</label>
                                        <input type="radio" id="written4" name="written[0]" value="4" {{isset($data['written'][0]) && $data['written'][0]  == "4" ? 'checked' : ''}}>
                                        <label for="written4">4</label>
                                        <input type="radio" id="written5" name="written[0]" value="5" {{isset($data['written'][0]) && $data['written'][0]  == "5" ? 'checked' : ''}}>
                                        <label for="written5">5</label>
                                    </td>
                                    <td>
                                        <input type="radio" id="read1" name="read[0]" style="margin-right: 20px;"  value="1" {{isset($data['read'][0]) && $data['read'][0]  == "1" ? 'checked' : ''}} >
                                        <label for="read1">1</label>
                                        <input type="radio" id="read2" name="read[0]" value="2" {{isset($data['read'][0]) && $data['read'][0]  == "2" ? 'checked' : ''}}>
                                        <label for="read2">2</label>
                                        <input type="radio" id="read3" name="read[0]" value="3" {{isset($data['read'][0]) && $data['read'][0]  == "3" ? 'checked' : ''}}>
                                        <label for="read3">3</label>
                                        <input type="radio" id="read4" name="read[0]" value="4" {{isset($data['read'][0]) && $data['read'][0]  == "4" ? 'checked' : ''}}>
                                        <label for="read4">4</label>
                                        <input type="radio" id="read5" name="read[0]" value="5" {{isset($data['read'][0]) && $data['read'][0]  == "5" ? 'checked' : ''}}>
                                        <label for="read5">5</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <input type="radio" id="spoken1" name="spoken[1]" style="margin-right: 20px;"  value="1" {{isset($data['spoken'][1]) && $data['spoken'][1]  == "1" ? 'checked' : ''}} >
                                        <label for="spoken1">1</label>
                                        <input type="radio" id="spoken2" name="spoken[1]" value="2" {{isset($data['spoken'][1]) && $data['spoken'][1]  == "2" ? 'checked' : ''}}>
                                        <label for="spoken2">2</label>
                                        <input type="radio" id="spoken3" name="spoken[1]" value="3" {{isset($data['spoken'][1]) && $data['spoken'][1]  == "3" ? 'checked' : ''}}>
                                        <label for="spoken3">3</label>
                                        <input type="radio" id="spoken4" name="spoken[1]" value="4" {{isset($data['spoken'][1]) && $data['spoken'][1]  == "4" ? 'checked' : ''}}>
                                        <label for="spoken4">4</label>
                                        <input type="radio" id="spoken5" name="spoken[1]" value="5" {{isset($data['spoken'][1]) && $data['spoken'][1] == "5" ? 'checked' : ''}}>
                                        <label for="spoken5">5</label>
                                    </td>
                                    <td>
                                        <input type="radio" id="written1" name="written[1]" style="margin-right: 20px;"  value="1" {{isset($data['written'][1]) && $data['written'][1]  == "1" ? 'checked' : ''}} >
                                        <label for="written1">1</label>
                                        <input type="radio" id="written2" name="written[1]" value="2" {{isset($data['written'][1]) && $data['written'][1]  == "2" ? 'checked' : ''}}>
                                        <label for="written2">2</label>
                                        <input type="radio" id="written3" name="written[1]" value="3" {{isset($data['written'][1]) && $data['written'][1]  == "3" ? 'checked' : ''}}>
                                        <label for="written3">3</label>
                                        <input type="radio" id="written4" name="written[1]" value="4" {{isset($data['written'][1]) && $data['written'][1]  == "4" ? 'checked' : ''}}>
                                        <label for="written4">4</label>
                                        <input type="radio" id="written5" name="written[1]" value="5" {{isset($data['written'][1]) && $data['written'][1]  == "5" ? 'checked' : ''}}>
                                        <label for="written5">5</label>
                                    </td>
                                    <td>
                                        <input type="radio" id="read1" name="read[1]" style="margin-right: 20px;"  value="1" {{isset($data['read'][1]) && $data['read'][1]  == "1" ? 'checked' : ''}} >
                                        <label for="read1">1</label>
                                        <input type="radio" id="read2" name="read[1]" value="2" {{isset($data['read'][1]) && $data['read'][1]  == "2" ? 'checked' : ''}}>
                                        <label for="read2">2</label>
                                        <input type="radio" id="read3" name="read[1]" value="3" {{isset($data['read'][1]) && $data['read'][1]  == "3" ? 'checked' : ''}}>
                                        <label for="read3">3</label>
                                        <input type="radio" id="read4" name="read[1]" value="4" {{isset($data['read'][1]) && $data['read'][1]  == "4" ? 'checked' : ''}}>
                                        <label for="read4">4</label>
                                        <input type="radio" id="read5" name="read[1]" value="5" {{isset($data['read'][1]) && $data['read'][1]  == "5" ? 'checked' : ''}}>
                                        <label for="read5">5</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <input type="radio" id="spoken1" name="spoken[2]" style="margin-right: 20px;"  value="1" {{isset($data['spoken'][2]) && $data['spoken'][2]  == "1" ? 'checked' : ''}} >
                                        <label for="spoken1">1</label>
                                        <input type="radio" id="spoken2" name="spoken[2]" value="2" {{isset($data['spoken'][2]) && $data['spoken'][2]  == "2" ? 'checked' : ''}}>
                                        <label for="spoken2">2</label>
                                        <input type="radio" id="spoken3" name="spoken[2]" value="3" {{isset($data['spoken'][2]) && $data['spoken'][2]  == "3" ? 'checked' : ''}}>
                                        <label for="spoken3">3</label>
                                        <input type="radio" id="spoken4" name="spoken[2]" value="4" {{isset($data['spoken'][2]) && $data['spoken'][2]  == "4" ? 'checked' : ''}}>
                                        <label for="spoken4">4</label>
                                        <input type="radio" id="spoken5" name="spoken[2]" value="5" {{isset($data['spoken'][2]) && $data['spoken'][2] == "5" ? 'checked' : ''}}>
                                        <label for="spoken5">5</label>
                                    </td>
                                    <td>
                                        <input type="radio" id="written1" name="written[2]" style="margin-right: 20px;"  value="1" {{isset($data['written'][2]) && $data['written'][2]  == "1" ? 'checked' : ''}} >
                                        <label for="written1">1</label>
                                        <input type="radio" id="written2" name="written[2]" value="2" {{isset($data['written'][2]) && $data['written'][2]  == "2" ? 'checked' : ''}}>
                                        <label for="written2">2</label>
                                        <input type="radio" id="written3" name="written[2]" value="3" {{isset($data['written'][2]) && $data['written'][2]  == "3" ? 'checked' : ''}}>
                                        <label for="written3">3</label>
                                        <input type="radio" id="written4" name="written[2]" value="4" {{isset($data['written'][2]) && $data['written'][2]  == "4" ? 'checked' : ''}}>
                                        <label for="written4">4</label>
                                        <input type="radio" id="written5" name="written[2]" value="5" {{isset($data['written'][2]) && $data['written'][2]  == "5" ? 'checked' : ''}}>
                                        <label for="written5">5</label>
                                    </td>
                                    <td>
                                        <input type="radio" id="read1" name="read[3]" style="margin-right: 20px;"  value="1" {{isset($data['read'][3]) && $data['read'][3]  == "1" ? 'checked' : ''}} >
                                        <label for="read1">1</label>
                                        <input type="radio" id="read2" name="read[3]" value="2" {{isset($data['read'][3]) && $data['read'][3]  == "2" ? 'checked' : ''}}>
                                        <label for="read2">2</label>
                                        <input type="radio" id="read3" name="read[3]" value="3" {{isset($data['read'][3]) && $data['read'][3]  == "3" ? 'checked' : ''}}>
                                        <label for="read3">3</label>
                                        <input type="radio" id="read4" name="read[3]" value="4" {{isset($data['read'][3]) && $data['read'][3]  == "4" ? 'checked' : ''}}>
                                        <label for="read4">4</label>
                                        <input type="radio" id="read5" name="read[3]" value="5" {{isset($data['read'][3]) && $data['read'][3]  == "5" ? 'checked' : ''}}>
                                        <label for="read5">5</label>
                                    </td>
                                </tr>
                            </table>
                            
                            <h3 class="form_header_2" style="margin-top: 20px;">ATTACHMENTS REQUIREDالمرفقات المقترحة  </h3>
                            <table style="margin-top: 20px;">
                                <tr>
                                    <td style="width: 80%;">Curriculum Vitae السيرة الذاتية </td>
                                    <td>
                                        <div class="row">
                                        تحميل مرفق
                                        <input class="form-check-input" type="checkbox" name="curriculum_vitae" value="curriculum_vitae" {{isset($data['curriculum_vitae']) && $data['curriculum_vitae']  =="curriculum_vitae" ? 'checked' : ''}}>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Medical certificate (validity: less than 3 months prior to the application)شهادة طبية (في مدة أقصاها 3 اشهر قبل تقديم الطلب ) </td>
                                    <td>
                                        <div class="row">
                                        تحميل مرفق <input class="form-check-input" type="checkbox" name="medical_certificate" value="medical_certificate" {{isset($data['medical_certificate']) && $data['medical_certificate']  =="medical_certificate" ? 'checked' : ''}}>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Support letter from the NF خطاب تزكية من الاتحاد/اللجنة  المعني  </td>
                                    <td> <div class="row">تحميل مرفق <input class="form-check-input" type="checkbox" name="support_letter" value="support_letter" {{isset($data['support_letter']) && $data['support_letter']  =="support_letter" ? 'checked' : ''}}></div></td>
                                </tr>
                                <tr>
                                    <td>Copy of passport نسخة من جواز السفر  </td>
                                    <td> <div class="row">تحميل مرفق <input class="form-check-input" type="checkbox" name="passport" value="passport" {{isset($data['passport']) && $data['passport']  =="passport" ? 'checked' : ''}}></div></td>
                                </tr>
                                <tr>
                                    <td>Covering letter from the candidate خطاب تغطية من المترشح  </td>
                                    <td> <div class="row">تحميل مرفق <input class="form-check-input" type="checkbox" name="covering_letter" value="covering_letter" {{isset($data['covering_letter']) && $data['covering_letter']  =="covering_letter" ? 'checked' : ''}}></div></td>
                                </tr>
                                <tr>
                                    <td>Acceptance letter from the centre/university/IF خطاب قبول من المركز / الجامعة </td>
                                    <td> <div class="row">تحميل مرفق <input class="form-check-input" type="checkbox" name="acceptance_letter" value="acceptance_letter" {{isset($data['acceptance_letter']) && $data['acceptance_letter']  =="acceptance_letter" ? 'checked' : ''}}></div></td>
                                </tr>
                            </table>
                            
                            <p style="margin-top: 10px;">ملاحظة (يمكن تغيير مسميات المرفقات بناءا على طبيعة البرنامج )</p>
                            
                            <p>يرفق الطلب مع رسالة تغطية من الاتحاد / اللجنة ويتم تحميلها عبر النظام ويتم ارسال الأصل الى البريد الرسمي للجنة الأولمبية العمانية موجهة الى الأمين العام.</p>
                            

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