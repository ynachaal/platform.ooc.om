<?php 
$decode = array();
if(isset($dataUserApplications['data'])) {
$data = json_decode($dataUserApplications['data'],true);
}
if(isset($get_data['manage_attachment']) && !empty($get_data['manage_attachment'])) {
$decode = json_decode($get_data['manage_attachment'],true);
}

if(isset($dataUserApplications['attachments'])) {
$attachments1 = json_decode($dataUserApplications['attachments']);
$attachments = array();
foreach($attachments1 as $key=>$val){
	foreach($val as $k=>$v)
	$attachments['attachment'][$k] = $v;
}

}
 ?>
<style>
    table {
        width: 100%;
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 15px;
        /* text-align: left; */
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

    .budget_proposal {
        width: 100%;
    }

    .budget {
        width: 100%;
    }
</style>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>المبادرات الادارية - Application form</h1>
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
                    <form role="form" id="quickForm" method="POST" action="{{ url('/forms/save_form1') }}" enctype="multipart/form-data">
                        @csrf

                        @if(isset($dataUserApplications))
                        <input type="hidden" name="dataUserApplicationsId" value="{{$dataUserApplications['id']}}" />
                        @endif

                        <div class="card-body">
                            <div class="form-group col-md-6">
                                <input type="hidden" name="application_id" class="form-control" placeholder="Committee Name" value="{{$application_id}}">
                            </div>
                            <p>IMPORTANT: This form should be sent to Olympic Solidarity no later than 3 months before the intended period of the course. The IF may ask for the chosen period to be changed depending on the availability of the expert or other course-related parameters.
                                <p>يجب ارسال هذا الطلب قبل مدة لا تقل عن 3 اشهر من الموعد المحدد لتنفيذ البرنامج</p>


                                <p>What area of management is your project related to?</p>
                                <p>ما مجال الإدارة الذي يرتبط به مشروعك؟</p>

                                <table style="margin-top: 20px;">
                                    <tr>
                                        <td style="width: 80%;">Strategic Planning (development or review of a strategic plan and/or operational plan and a monitoring system, etc.) تخطيط استراتيجي(تطوير أو مراجعة خطة إستراتيجية و / أو خطة تشغيليةونظام مراقبة ، إلخ.)</td>
                                        <td>
                                            <div class="row">
                                                <input class="form-check-input" type="radio" name="area_management" value="strategic_planning" {{isset($data['area_management']) && $data['area_management']  =="strategic_planning" ? 'checked' : ''}}>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Policy/procedures/regulations (development or review of policies, procedures or regulations in relation to finance management, administration, HR, ethics, etc.) السياسة / الإجراءات / اللوائح (تطوير أو مراجعة السياسات أو الإجراءات أو اللوائح فيما يتعلق بالإدارة المالية ، والإدارة ، والموارد البشرية ، والأخلاق ، وما إلى ذلك)</td>
                                        <td>
                                            <div class="row">
                                                <input class="form-check-input" type="radio" name="area_management" value="policy_procedures_regulations" {{isset($data['area_management']) && $data['area_management']  =="policy_procedures_regulations" ? 'checked' : ''}}>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Organisation/governance restructuring (review and restructuring of the governance and/or organisational system, etc.) إعادة هيكلة التنظيم / الحوكمة (مراجعة وإعادة هيكلة الحوكمة و / أو النظام التنظيمي ، إلخ.)</td>
                                        <td>
                                            <div class="row">
                                                <input class="form-check-input" type="radio" name="area_management" value="organisation_governance" {{isset($data['area_management']) && $data['area_management']  =="organisation_governance" ? 'checked' : ''}}>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Finance management (review of the finance management system, purchase or upgrade of an accounting software and related training, etc.) الإدارة المالية (مراجعة نظام الإدارة المالية ، الشراء أو ترقية برنامج محاسبة والتدريب ذي الصلة ، وما إلى ذلك</td>
                                        <td>
                                            <div class="row">
                                                <input class="form-check-input" type="radio" name="area_management" value="finance_management" {{isset($data['area_management']) && $data['area_management']  =="finance_management" ? 'checked' : ''}}>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Risk management (development of a risk register, etc.) إدارة المخاطر (تطوير سجل مخاطر ، إلخ.)</td>
                                        <td>
                                            <div class="row">
                                                <input class="form-check-input" type="radio" name="area_management" value="risk_management" {{isset($data['area_management']) && $data['area_management']  =="risk_management" ? 'checked' : ''}}>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Information & Communications Technology (purchase or upgrade of software/hardware, development or upgrade of a website, extranet, intranet, internal network, data management system, electronic document management system, mobile app, IT infrastructure or security, etc.) تكنولوجيا المعلومات والاتصالات (شراء أو ترقية البرامج / الأجهزة ، أو تطوير أو ترقية موقع ويب ، أو إكسترانت ، أو إنترانت ، أو شبكة داخلية ، أو نظام إدارة البيانات ، أو نظام إدارة المستندات الإلكترونية ، أو تطبيق الهاتف ، أو البنية التحتية لتكنولوجيا المعلومات أو الأمان ، إلخ.)</td>
                                        <td>
                                            <div class="row">
                                                <input class="form-check-input" type="radio" name="area_management" value="information_communications" {{isset($data['area_management']) && $data['area_management']  =="information_communications" ? 'checked' : ''}}>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Marketing (brand development, review or development of a marketing strategy or a marketing campaign; market research, etc.) تسويق (تطوير العلامة التجارية أو مراجعة أو تطوير إستراتيجية التسويق أو حملة تسويقية ؛ أبحاث السوق ، إلخ.)</td>
                                        <td>
                                            <div class="row">
                                                <input class="form-check-input" type="radio" name="area_management" value="marketing" {{isset($data['area_management']) && $data['area_management']  =="marketing" ? 'checked' : ''}}>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Communications (internal communication, strategy and tools for communication with the stakeholders or general public, social media, etc.) مجال الاتصالات (الاتصال الداخلي والاستراتيجية وأدوات الاتصال مع أصحاب المصلحة أو عامة الناس ، وسائل التواصل الاجتماعي ، إلخ.)</td>
                                        <td>
                                            <div class="row">
                                                <input class="form-check-input" type="radio" name="area_management" value="communications" {{isset($data['area_management']) && $data['area_management']  =="communications" ? 'checked' : ''}}>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Human Resources (development of an HR strategy, etc.) الموارد البشرية (تطوير استراتيجية الموارد البشرية ، وما إلى ذلك)</td>
                                        <td>
                                            <div class="row">
                                                <input class="form-check-input" type="radio" name="area_management" value="human_resources" {{isset($data['area_management']) && $data['area_management']  =="human_resources" ? 'checked' : ''}}>
                                            </div>
                                        </td>
                                    </tr>

                                </table>

                                <div class="col-md-12 row" style="margin-top: 20px;">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">:Project start dateتاريخ بدء المشروع:</label>
                                        <input type="date" name="project_start_date" class="form-control" placeholder="Enter date" value="{{isset($data['project_start_date'])? $data['project_start_date'] : ''}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Project end date: تاريخ انتهاء المشروع:</label>
                                        <input type="date" name="project_end_date" class="form-control" placeholder="Enter date" value="{{isset($data['project_end_date'])? $data['project_end_date'] : ''}}">
                                    </div>
                                </div>

                                <p>Please describe your NOC Management Initiative and how the funds will be spent, including the following information: </p>
                                <p>يرجى وصف المشروع بك وكيف سيتم إنفاق الأموال ،بما في ذلك المعلومات التالية</p>

                                <ul>
                                    <li>project description, timeline, name of expert/facilitator if applicable, expenses to be covered</li>
                                    <li> وصف المشروع ، والجدول الزمني ، واسم الخبير / الميسر إن أمكن ، والمصروفات التي سيتم تغطيتها</li>
                                    <li>type of software/hardware to be purchased/upgraded (if applicable)</li>
                                    <li> نوع البرامج / الأجهزة التي سيتم شراؤها / ترقيتها (إن أمكن)</li>
                                    <li>training scope, participants, dates and duration, instructor (if applicable)</li>
                                    <li> نطاق التدريب ، المشاركون ، التواريخ والمدة ، المدرب (إن وجد)</li>
                                </ul>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" name="noc_Management" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{isset($data['noc_Management']) ? $data['noc_Management'] : ''}}</textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1" style="margin-top: 20px;">Why is it important for you to implement this initiative? لماذا من المهم أن تنفذ هذه المبادرة؟</label>
                                    <textarea class="form-control" name="initiative" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{isset($data['initiative']) ? $data['initiative'] : ''}}</textarea>
                                </div>
                                <p>Please complete the table below with the performance indicators you will use to measure the success of the initiative.</p>
                                <p>يرجى استكمال الجدول أدناه بمؤشرات الأداء ستستخدمها لقياس نجاح المبادرة.</p>

                                <table style="margin-top: 20px;">
                                    <tr>
                                        <th>Objective (short to long term) What will happen if your project is successful? الهدف (قصير الأجل إلى طويل الأجل) ماذا سيحدث إذا نجح مشروعك؟</th>
                                        <th>Performance Indicator How will you measure the success of the objective? مؤشر الأداء كيف ستقيس نجاح الهدف؟</th>
                                        <th>Deadline When will you be able to evaluate it? الموعد النهائي متى ستتمكن من تقييمها؟</th>
                                    </tr>
                                    <tr>
                                        <td class="p-0"><input type="text" name="objective_project[0]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['objective_project'][0])? $data['objective_project'][0] : ''}}"></td>
                                        <td class="p-0"><input type="text" name="performance_indicator[0]" class="budget border-0" value="{{isset($data['performance_indicator'][0])? $data['performance_indicator'][0] : ''}}"></td>
                                        <td class="p-0"><input type="text" name="deadline[0]" class="budget border-0" value="{{isset($data['deadline'][0])? $data['deadline'][0] : ''}}"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-0"><input type="text" name="objective_project[1]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['objective_project'][1])? $data['objective_project'][1] : ''}}"></td>
                                        <td class="p-0"><input type="text" name="performance_indicator[1]" class="budget border-0" value="{{isset($data['performance_indicator'][1])? $data['performance_indicator'][1] : ''}}"></td>
                                        <td class="p-0"><input type="text" name="deadline[1]" class="budget border-0" value="{{isset($data['deadline'][0])? $data['deadline'][1] : ''}}"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-0"><input type="text" name="objective_project[2]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['objective_project'][2])? $data['objective_project'][2] : ''}}"></td>
                                        <td class="p-0"><input type="text" name="performance_indicator[2]" class="budget border-0" value="{{isset($data['performance_indicator'][2])? $data['performance_indicator'][2] : ''}}"></td>
                                        <td class="p-0"><input type="text" name="deadline[2]" class="budget border-0" value="{{isset($data['deadline'][0])? $data['deadline'][2] : ''}}"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-0"><input type="text" name="objective_project[3]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['objective_project'][3])? $data['objective_project'][3] : ''}}"></td>
                                        <td class="p-0"><input type="text" name="performance_indicator[3]" class="budget border-0" value="{{isset($data['performance_indicator'][3])? $data['performance_indicator'][3] : ''}}"></td>
                                        <td class="p-0"><input type="text" name="deadline[3]" class="budget border-0" value="{{isset($data['deadline'][0])? $data['deadline'][3] : ''}}"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-0"><input type="text" name="objective_project[4]" class="budget_proposal border-0" style="width: 100%;" value="{{isset($data['objective_project'][4])? $data['objective_project'][4] : ''}}"></td>
                                        <td class="p-0"><input type="text" name="performance_indicator[4]" class="budget border-0" value="{{isset($data['performance_indicator'][4])? $data['performance_indicator'][4] : ''}}"></td>
                                        <td class="p-0"><input type="text" name="deadline[4]" class="budget border-0" value="{{isset($data['deadline'][4])? $data['deadline'][4] : ''}}"></td>
                                    </tr>
                                </table>
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1" style="margin-top: 20px;">Does you have a structure in place to sustain the results of this initiative once Olympic Solidarity's contribution has been used up? هل لديك هيكل قائم للحفاظ على نتائج هذه المبادرة بمجرد استخدام مساهمة التضامن الأوليمبي؟</label>
                                    <textarea class="form-control" name="olympic_solidaritys" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{isset($data['olympic_solidaritys']) ? $data['olympic_solidaritys'] : ''}}</textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1" style="margin-top: 20px;">Will you be able to secure other sources of funding if Olympic Solidarity does not cover the total cost? هل ستكون قادرًا على تأمين مصادر تمويل أخرى إذا لم يغطي التضامن الأوليمبي التكلفة الإجمالية؟</label>
                                    <textarea class="form-control" name="funding_olympic" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{isset($data['funding_olympic']) ? $data['funding_olympic'] : ''}}</textarea>
                                </div>

                                <h3 class="form_header_2" style="margin-top: 20px;">BUDGET PROPOSAL</h3>
                                <p>Please provide a detailed budget for each phase of the project. الموازنة المقترحة يرجى تقديم ميزانية مفصلة لكل مرحلة من مراحل المشروع.</p>

                                <table style="margin-top: 20px;">
                                    <tr>
                                        <th>N°</th>
                                        <th>Description البند</th>
                                        <th>Budget المبلغ</th>
                                    </tr>
                                    <tr>
                                        <td class="p-0">1</td>
                                        <td class="p-0"><input type="text" name="description[0]" class="budget border-0" value="{{isset($data['description'][0])? $data['description'][0] : ''}}"></td>
                                        <td class="p-0"><input type="text"  name="budget[0]" class="budget border-0" value="{{isset($data['budget'][0])? $data['budget'][0] : ''}}"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-0">2</td>
                                        <td class="p-0"><input type="text" name="description[1]" class="budget border-0" value="{{isset($data['description'][1])? $data['description'][1] : ''}}"></td>
                                        <td class="p-0"><input type="text" name="budget[1]" class="budget border-0" value="{{isset($data['budget'][1])? $data['budget'][1] : ''}}"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-0">3</td>
                                        <td class="p-0"><input type="text" name="description[2]" class="budget border-0" value="{{isset($data['description'][2])? $data['description'][2] : ''}}"></td>
                                        <td class="p-0"><input type="text" name="budget[2]" class="budget border-0" value="{{isset($data['budget'][2])? $data['budget'][2] : ''}}"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-0">4</td>
                                        <td class="p-0"><input type="text" name="description[3]" class="budget border-0" value="{{isset($data['description'][3])? $data['description'][3] : ''}}"></td>
                                        <td class="p-0"><input type="text" name="budget[3]" class="budget border-0" value="{{isset($data['budget'][3])? $data['budget'][3] : ''}}"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-0">5</td>
                                        <td class="p-0"><input type="text" name="description[4]" class="budget border-0" value="{{isset($data['description'][4])? $data['description'][4] : ''}}"></td>
                                        <td class="p-0"><input type="text" name="budget[4]" class="budget border-0" value="{{isset($data['budget'][4])? $data['budget'][4] : ''}}"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-0">6</td>
                                        <td class="p-0"><input type="text" name="description[5]" class="budget border-0" value="{{isset($data['description'][5])? $data['description'][5] : ''}}"></td>
                                        <td class="p-0"><input type="text" name="budget[5]" class="budget border-0" value="{{isset($data['budget'][5])? $data['budget'][5] : ''}}"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-0">7</td>
                                        <td class="p-0"><input type="text" name="description[6]" class="budget border-0" value="{{isset($data['description'][6])? $data['description'][6] : ''}}"></td>
                                        <td class="p-0"><input type="text" name="budget[6]" class="budget border-0" value="{{isset($data['budget'][6])? $data['budget'][6] : ''}}"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-0">8</td>
                                        <td class="p-0"><input type="text" name="description[7]" class="budget border-0" value="{{isset($data['description'][7])? $data['description'][7] : ''}}"></td>
                                        <td class="p-0"><input type="text" name="budget[7]" class="budget border-0" value="{{isset($data['budget'][7])? $data['budget'][7] : ''}}"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-0">9</td>
                                        <td class="p-0"><input type="text" name="description[8]" class="budget border-0" value="{{isset($data['description'][8])? $data['description'][8] : ''}}"></td>
                                        <td class="p-0"><input type="text" name="budget[8]" class="budget border-0" value="{{isset($data['budget'][8])? $data['budget'][8] : ''}}"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-0">10</td>
                                        <td class="p-0"><input type="text" name="description[9]" class="budget border-0" value="{{isset($data['description'][9])? $data['description'][9] : ''}}"></td>
                                        <td class="p-0"><input type="text" name="budget[9]" class="budget border-0" value="{{isset($data['budget'][9])? $data['budget'][9] : ''}}"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-0"></td>
                                        <td class="p-0">الاجماليTOTAL</td>
                                        <td class="p-0"><input type="text" name="total" class="budget border-0" value="{{isset($data['total'])? $data['total'] : ''}}" readonly></td>
                                    </tr>
                                </table>
								<?php 
									if( !empty($decode)){
										?>
                                <h3 class="form_header_2" style="margin-top: 20px;">ATTACHMENTS REQUIRED</h3>
									<?php } ?>
                                <table style="margin-top: 20px;">
									<?php 
								if(in_array(1,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Curriculum Vitae السيرة الذاتية </td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['curriculum_vitae']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['curriculum_vitae'])}}">{{$attachments['attachment']['curriculum_vitae']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload1">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload1" name="attachment[curriculum_vitae]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error1">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								<?php 
								if(in_array(2,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Application form for the program استمارة الترشح للبرنامج</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['application_program']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['application_program'])}}">{{$attachments['attachment']['application_program']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload2">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload2" name="attachment[application_program]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error2">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								<?php 
								if(in_array(3,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Support letter from the NF خطاب تزكية من الاتحاد/اللجنة المعني</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['support_letter']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['support_letter'])}}">{{$attachments['attachment']['support_letter']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload3">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload3" name="attachment[support_letter]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error3">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
									<?php 
								if(in_array(4,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Copy of passport نسخة من جواز السفر</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['copy_passport']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['copy_passport'])}}">{{$attachments['attachment']['copy_passport']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload4">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload4" name="attachment[copy_passport]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error4">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
									<?php 
								if(in_array(5,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Covering letter from the candidate خطاب تغطية من المترشح</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['covering_letter']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['covering_letter'])}}">{{$attachments['attachment']['covering_letter']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload5">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload5" name="attachment[covering_letter]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error5">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								<?php 
								if(in_array(6,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Acceptance letter from the center/university/IF خطاب قبول من المركز / الجامعة</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['acceptance_letter']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['acceptance_letter'])}}">{{$attachments['attachment']['acceptance_letter']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload6">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload6" name="attachment[acceptance_letter]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error6">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								
								<?php 
								if(in_array(7,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;"> Qualifications with transcripts المؤهلات العلمية مع كشف الدرجات</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['qualifications_transcripts']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['qualifications_transcripts'])}}">{{$attachments['attachment']['qualifications_transcripts']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload7">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload7" name="attachment[qualifications_transcripts]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error7">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								<?php 
								if(in_array(8,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;"> language certificate شهادة اتقان اللغة</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['language_certificate']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['language_certificate'])}}">{{$attachments['attachment']['language_certificate']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload8">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload8" name="attachment[language_certificate]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error8">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								
								<?php 
								if(in_array(9,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;"> Photograph صورة شخصية</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['photograph']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['photograph'])}}">{{$attachments['attachment']['photograph']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload9">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload9" name="attachment[photograph]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error9">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
									<?php 
								if(in_array(10,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;"> A recommendation letter from a University Professor رسالة تزكية من الجامعة/الكلية</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['recommendation_letter']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['recommendation_letter'])}}">{{$attachments['attachment']['recommendation_letter']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload10">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload10" name="attachment[recommendation_letter]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error10">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								
								<?php 
								if(in_array(11,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;"> Recommendation letter from the union/committee رسالة تزكية من الاتحاد/اللجنة</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['recommendation_letter_union']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['recommendation_letter_union'])}}">{{$attachments['attachment']['recommendation_letter_union']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload11">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload11" name="attachment[recommendation_letter_union]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error11">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								<?php 
								if(in_array(12,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;"> cover letterرسالة التغطية </td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['covering_letter']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['covering_letter'])}}">{{$attachments['attachment']['covering_letter']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload12">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload12" name="attachment[covering_letter]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error12">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								<?php 
								if(in_array(13,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Detailed plan of the programالخطة التفصيلية للبرنامج   </td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['detailed_action']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['detailed_action'])}}">{{$attachments['attachment']['detailed_action']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload13">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload13" name="attachment[detailed_action]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error13">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								<?php 
								if(in_array(14,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Medical certificate (validity: less than 3 months prior to the application)شهادة طبية (في مدة أقصاها 3 اشهر قبل تقديم الطلب )</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['medical_certificate']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['medical_certificate'])}}">{{$attachments['attachment']['medical_certificate']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload14">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload14" name="attachment[medical_certificate]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error14">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								<?php 
								if(in_array(15,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">For the sport-specific training: detailed description of the training course & budgetوصف مفصل للدورة التدريبية والميزانية</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['sport_specific_training']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['sport_specific_training'])}}">{{$attachments['attachment']['sport_specific_training']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload15">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload15" name="attachment[sport_specific_training]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error15">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								<?php 
								if(in_array(16,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Curriculum Vitae of the proposed expert (where applicable) السيرة الذاتية للخبير المقترح ان وجد   </td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['curriculum_vitae']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['curriculum_vitae'])}}">{{$attachments['attachment']['curriculum_vitae']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload16">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload16" name="attachment[curriculum_vitae]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error16">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								<?php 
								if(in_array(17,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Acceptance letter from the expert خطاب قبول من الخبير</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['acceptance_letter']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['acceptance_letter'])}}">{{$attachments['attachment']['acceptance_letter']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload17">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload17" name="attachment[acceptance_letter]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error17">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								
								
								<?php 
								if(in_array(18,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">العقد Service provider’s proposal and/or contract</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['service_provider_proposal']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['service_provider_proposal'])}}">{{$attachments['attachment']['service_provider_proposal']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload18">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload18" name="attachment[service_provider_proposal]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error18">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								<?php 
								if(in_array(19,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">الجدول الزمنى للمشروع Project schedule</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['project_schedule']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['project_schedule'])}}">{{$attachments['attachment']['project_schedule']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload19">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload19" name="attachment[project_schedule]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error19">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
								<?php 
								if(in_array(20,$decode) && !empty($decode))
								{									
								?>
                                <tr>
                                    <td style="width: 80%;">Other attachments مرفقات أخرى</td>
                                    <td>
                                        <div class="row">
                                            @if(!empty($attachments) && isset($attachments['attachment']) && isset($attachments['attachment']['other_attachments']))
                                                <a target="_blank" href="{{url('upload/form_document/'.$dataUserApplications['user_id'].'/'.$attachments['attachment']['other_attachments'])}}">{{$attachments['attachment']['other_attachments']}}</a>
                                            @endif

                                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                                                <label for = "upload20">تحميل مرفق</label>
                                                <input class="custom-file-input" type="file" id="upload20" name="attachment[other_attachments]">
													<span style="display:none;color: red;font-size: 13px;" id="size_error20">@lang('custom.file_size')</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
								<?php 
								}
								?>
                                </table>
                            </div>
                        <!-- /.card-body -->
                          <div class="card-footer">
                            @if (( \Auth::user()->hasAnyRole(['User']) && !isset($data) ) || (\Auth::user()->hasAnyRole(['User']) && (isset($dataUserApplications) && ($dataUserApplications['status'] == 'request not completed' || $dataUserApplications['status'] == 'not submitted'))))
                            @if(isset($data) && $dataUserApplications['status'] != 'not submitted')
                            <button id="submit" type="submit" class="btn btn-primary">@lang('custom.update')</button>
                            @else
                            <button id="submit"  type="submit" class="btn btn-primary">@lang('custom.save')</button>
							&nbsp;
							<button id="temporary"  name="temporary" style="margin:0 7px 0 0px" type="submit" class="btn btn-danger">@lang('custom.save_temporary')</button>
                            @endif
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>


    var total = 0;
    $(document).ready(function() {
			$("#submit,#temporary").click(function(){
error = 0;		
<?php 
	if(in_array(1,$decode) && !empty($decode))
	{									
	?>
	var upload1 = document.getElementById("upload1").files.length;
if(upload1>0) {
	var file_size1 = $('#upload1')[0].files[0].size;
					size1 = 5*1000*1000;
					if(file_size1>size1) {
						error1 = 1;
						$("#size_error1").show();
					} else {
						$("#size_error1").hide();
					}
					
}
	<?php 
	}
	?>
	<?php 
	if(in_array(2,$decode) && !empty($decode))
	{									
	?>
	var upload2 = document.getElementById("upload2").files.length;
	if(upload2>0) {
		var file_size2 = $('#upload2')[0].files[0].size;
						size2 = 5*1000*1000;
						if(file_size2>size2) {
							error1 = 1;
							$("#size_error2").show();
						} else {
							$("#size_error2").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(3,$decode) && !empty($decode))
	{									
	?>
	var upload3 = document.getElementById("upload3").files.length;
	if(upload3>0) {
		var file_size3 = $('#upload3')[0].files[0].size;
						size3 = 5*1000*1000;
						if(file_size3>size3) {
							error1 = 1;
							$("#size_error3").show();
						} else {
							$("#size_error3").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(4,$decode) && !empty($decode))
	{									
	?>
	var upload4 = document.getElementById("upload4").files.length;
	if(upload4>0) {
		var file_size4 = $('#upload4')[0].files[0].size;
						size4 = 5*1000*1000;
						if(file_size4>size4) {
							error1 = 1;
							$("#size_error4").show();
						} else {
							$("#size_error4").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(5,$decode) && !empty($decode))
	{									
	?>
	var upload5 = document.getElementById("upload5").files.length;
	if(upload5>0) {
		var file_size5 = $('#upload5')[0].files[0].size;
						size5 = 5*1000*1000;
						if(file_size5>size5) {
							error1 = 1;
							$("#size_error5").show();
						} else {
							$("#size_error5").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(6,$decode) && !empty($decode))
	{									
	?>
	var upload6 = document.getElementById("upload6").files.length;
	if(upload6>0) {
		var file_size6 = $('#upload6')[0].files[0].size;
						size6 = 5*1000*1000;
						if(file_size6>size6) {
							error1 = 1;
							$("#size_error6").show();
						} else {
							$("#size_error6").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(7,$decode) && !empty($decode))
	{									
	?>
	var upload7 = document.getElementById("upload7").files.length;
	if(upload7>0) {
		var file_size7 = $('#upload7')[0].files[0].size;
						size7 = 5*1000*1000;
						if(file_size7>size7) {
							error1 = 1;
							$("#size_error7").show();
						} else {
							$("#size_error7").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(8,$decode) && !empty($decode))
	{									
	?>
	var upload8 = document.getElementById("upload8").files.length;
	if(upload8>0) {
		var file_size8 = $('#upload8')[0].files[0].size;
						size8 = 5*1000*1000;
						if(file_size8>size8) {
							error1 = 1;
							$("#size_error8").show();
						} else {
							$("#size_error8").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(9,$decode) && !empty($decode))
	{									
	?>
	var upload9 = document.getElementById("upload9").files.length;
	if(upload9>0) {
		var file_size9 = $('#upload9')[0].files[0].size;
						size9 = 5*1000*1000;
						if(file_size9>size9) {
							error1 = 1;
							$("#size_error9").show();
						} else {
							$("#size_error9").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(10,$decode) && !empty($decode))
	{									
	?>
	var upload10 = document.getElementById("upload10").files.length;
	if(upload10>0) {
		var file_size10 = $('#upload10')[0].files[0].size;
						size10 = 5*1000*1000;
						if(file_size10>size10) {
							error1 = 1;
							$("#size_error10").show();
						} else {
							$("#size_error10").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(11,$decode) && !empty($decode))
	{									
	?>
	var upload11 = document.getElementById("upload11").files.length;
	if(upload11>0) {
		var file_size11 = $('#upload11')[0].files[0].size;
						size11 = 5*1000*1000;
						if(file_size11>size11) {
							error1 = 1;
							$("#size_error11").show();
						} else {
							$("#size_error11").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(12,$decode) && !empty($decode))
	{									
	?>
	var upload12 = document.getElementById("upload12").files.length;
	if(upload12>0) {
		var file_size12 = $('#upload12')[0].files[0].size;
						size12 = 5*1000*1000;
						if(file_size12>size12) {
							error1 = 1;
							$("#size_error12").show();
						} else {
							$("#size_error12").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(13,$decode) && !empty($decode))
	{									
	?>
	var upload13 = document.getElementById("upload13").files.length;
	if(upload13>0) {
		var file_size13 = $('#upload13')[0].files[0].size;
						size13 = 5*1000*1000;
						if(file_size13>size13) {
							error1 = 1;
							$("#size_error13").show();
						} else {
							$("#size_error13").hide();
						}
						
	}
	<?php 
	}
	?>
	
	<?php 
	if(in_array(14,$decode) && !empty($decode))
	{									
	?>
	var upload14 = document.getElementById("upload14").files.length;
	if(upload14>0) {
		var file_size14 = $('#upload14')[0].files[0].size;
						size14 = 5*1000*1000;
						if(file_size14>size14) {
							error1 = 1;
							$("#size_error14").show();
						} else {
							$("#size_error14").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(15,$decode) && !empty($decode))
	{									
	?>
	var upload15 = document.getElementById("upload15").files.length;
	if(upload15>0) {
		var file_size15 = $('#upload15')[0].files[0].size;
						size15 = 5*1000*1000;
						if(file_size15>size15) {
							error1 = 1;
							$("#size_error15").show();
						} else {
							$("#size_error15").hide();
						}
						
	}
	<?php 
	}
	?>
	<?php 
	if(in_array(16,$decode) && !empty($decode))
	{									
	?>
	var upload16 = document.getElementById("upload16").files.length;
	if(upload16>0) {
		var file_size16 = $('#upload16')[0].files[0].size;
						size16 = 5*1000*1000;
						if(file_size16>size16) {
							error1 = 1;
							$("#size_error16").show();
						} else {
							$("#size_error16").hide();
						}
						
	}
	<?php 
	}
	?>
	
	<?php 
	if(in_array(17,$decode) && !empty($decode))
	{									
	?>
	var upload17 = document.getElementById("upload17").files.length;
	if(upload17>0) {
		var file_size17 = $('#upload17')[0].files[0].size;
						size17 = 5*1000*1000;
						if(file_size17>size17) {
							error1 = 1;
							$("#size_error17").show();
						} else {
							$("#size_error17").hide();
						}
						
	}
	<?php 
	}
	?>
	
	<?php 
	if(in_array(18,$decode) && !empty($decode))
	{									
	?>
	var upload18 = document.getElementById("upload18").files.length;
	if(upload18>0) {
		var file_size18 = $('#upload18')[0].files[0].size;
						size18 = 5*1000*1000;
						if(file_size18>size18) {
							error1 = 1;
							$("#size_error18").show();
						} else {
							$("#size_error18").hide();
						}
						
	}
	<?php 
	}
	?>
	
	<?php 
	if(in_array(19,$decode) && !empty($decode))
	{									
	?>
	var upload19 = document.getElementById("upload19").files.length;
	if(upload19>0) {
		var file_size19 = $('#upload19')[0].files[0].size;
						size19 = 5*1000*1000;
						if(file_size19>size19) {
							error1 = 1;
							$("#size_error19").show();
						} else {
							$("#size_error19").hide();
						}
						
	}
	<?php 
	}
	?>
	
	<?php 
	if(in_array(20,$decode) && !empty($decode))
	{									
	?>
	var upload20 = document.getElementById("upload20").files.length;
	if(upload20>0) {
		var file_size20 = $('#upload20')[0].files[0].size;
						size20 = 5*1000*1000;
						if(file_size20>size20) {
							error1 = 1;
							$("#size_error20").show();
						} else {
							$("#size_error20").hide();
						}
						
	}
	<?php 
	}
	?>
if(error== 1)
	return false;
	})
        $('form').find('input[name^="budget"]').on('blur', function() {
            total = 0;
            $('form').find('input[name^="budget"]').each(function(index, input) {
                var inputValue = parseInt($(input).val());
                if($.isNumeric(inputValue)) {
                    total += inputValue;
                } else {
                    $(this).val('');
                }
            });
            // console.log("total => " + total);
            $('form').find('input[name^="total"]').val(total);
        });
    })
</script>