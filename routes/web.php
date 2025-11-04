<?php
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Auth\LoginController;
Route::get('/clearCache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');
    return "Cleared!";
});

Route::get('change-language/{locale}', function ($locale) {
    session()->put('mylocale', $locale);
    return redirect()->back();
});



/* Route::get('/send-test-mail', function () {
    $to_email = 'anubhav.abstain@gmail.com';

    Mail::raw('This is a test email sent via SMTP.', function ($message) use ($to_email) {
        $message->to($to_email)
                ->subject('SMTP Mail Test')
                ->from('no-reply@ooc.om', 'Olympic Solidarity');
    });

    return 'Test email sent (if SMTP is correctly configured)';
}); */

Route::get('/', function () {
    if (\Auth::user()) {
        if (\Auth::user()->hasAnyRole(['Super Admin', 'Admin'])) {
            return redirect('/admin');
        } else {
            return redirect('/home');
        }
    } else {
        return redirect('/login');
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cron',[LoginController::class,'cron'])->name('cron');

Route::get('/excelexport', 'HomeController@excelexport')->name('excelexport');
Route::get('/contactus', 'HomeController@contactus')->name('contactus');
Route::Post('/savecontact', 'HomeController@savecontact')->name('savecontact');
Route::get('/forgot-password', 'HomeController@forgotpassword')->name('forgotpassword');
Route::Post('/send-password-mail', 'HomeController@sendpasswordmail')->name('sendpasswordmail');
Route::get('/update-password/{hash}', 'HomeController@updatepassword')->name('updatepassword');
Route::Post('/update-password-action', 'HomeController@updatepasswordaction')->name('updatepasswordaction');
Route::get('/view-instructions', 'HomeController@instructions')->name('instructions');
Route::get('/application/category', 'HomeController@getallcategory')->name('application_category');
Route::get('/application_category/{id}', 'HomeController@getallparent')->name('application');
Route::get('/child_application/{id}', 'HomeController@getAllChild')->name('child_application');
Route::group(['middleware' => ['role:User|Admin|Super Admin']], function () {
Route::Post('/save-user-profile', 'Admin\UserController@save_user_profile')->name('save_user_profile');
Route::get('/edit-profile', 'Admin\UserController@editProfile')->name('edit_profile');
});
// Route::get('/form-preview/{formName?}', 'HomeController@formPreview')->name('form-preview');

Route::group(['middleware' => ['role:Super Admin|Admin']], function () {
	Route::get('/notifications', 'HomeController@notifications')->name('notifications');
    Route::get('/instructions-listing', 'Admin\InstructionsController@index')->name('index');
    Route::get('/instructions/create', 'Admin\InstructionsController@create')->name('create');
	Route::Post('/instructions/save', 'Admin\InstructionsController@save')->name('save');
	Route::get('/instructions/editInstruction/{id}', 'Admin\InstructionsController@editInstruction')->name('instruction_edit');
    Route::get('/instructions/delete/{id}', 'Admin\InstructionsController@deleteInstruction')->name('instruction_delete');
    Route::get('/admin', 'Admin\AdminController@dashbord')->name('admin');
    Route::get('/users', 'Admin\UserController@index')->name('users');
    Route::get('/create_users', 'Admin\UserController@create_users')->name('create_users');
    Route::Post('/save_users', 'Admin\UserController@save_user')->name('save_user');
    Route::get('/edit_users/{id}', 'Admin\UserController@edit_users')->name('edit_users');
    Route::get('/delete_users/{id}', 'Admin\UserController@delete_users')->name('delete_users');

    Route::get('/admins', 'Admin\AdminController@index')->name('admins');
     Route::get('/send-alerts', 'Admin\AdminController@sendalerts')->name('sendalerts');
      Route::post('/save-alert-message', 'Admin\AdminController@sendalertssubmit');
    Route::get('/create_admins', 'Admin\AdminController@createAdmins')->name('create_admins');
    Route::Post('/save_admins', 'Admin\AdminController@saveAdmins')->name('save_admins');
    Route::get('/edit_admins/{id}', 'Admin\AdminController@editAdmins')->name('edit_admins');
   
    Route::get('/delete_admins/{id}', 'Admin\AdminController@deleteAdmins')->name('delete_admins');

    Route::get('/news', 'Admin\NewsController@index')->name('news');
    Route::get('/news/create', 'Admin\NewsController@createNews')->name('news_create');
    Route::Post('/news/save', 'Admin\NewsController@saveNews')->name('news_save');
    Route::get('/news/edit/{id}', 'Admin\NewsController@editNews')->name('news_edit');
    Route::get('/news/notification/{id}', 'Admin\NewsController@notificationNews')->name('news_notification');
    Route::get('/news/delete/{id}', 'Admin\NewsController@deleteNews')->name('news_delete');

    Route::get('/content', 'Admin\ContentController@index')->name('content');
    Route::get('/content/create', 'Admin\ContentController@createContent')->name('content_create');
    Route::Post('/content/save', 'Admin\ContentController@saveContent')->name('content_save');
    Route::get('/content/edit/{id}', 'Admin\ContentController@editContent')->name('content_edit');
    Route::get('/content/delete/{id}', 'Admin\ContentController@deleteContent')->name('content_delete');

    Route::get('/slider', 'Admin\SliderController@index')->name('slider');
    Route::get('/slider/create', 'Admin\SliderController@createSlider')->name('slider_create');
    Route::Post('/slider/save', 'Admin\SliderController@saveSlider')->name('slider_save');
    Route::get('/slider/edit/{id}', 'Admin\SliderController@editSlider')->name('slider_edit');
    Route::get('/slider/delete/{id}', 'Admin\SliderController@deleteSlider')->name('slider_delete');


Route::get('/whatsapp-messages', 'Admin\WhatsappMessagesController@index')->name('whatsapp_messages.index');

    Route::get('/committee', 'Admin\CommitteeController@index')->name('committee');
    Route::get('/committee/create', 'Admin\CommitteeController@createCommittee')->name('committee_create');
    Route::Post('/committee/save', 'Admin\CommitteeController@saveCommittee')->name('committee_save');
    Route::get('/committee/edit/{id}', 'Admin\CommitteeController@editCommittee')->name('committee_edit');
    Route::get('/committee/delete/{id}', 'Admin\CommitteeController@deleteCommittee')->name('committee_delete');

    Route::get('/category', 'Admin\CategoryController@index')->name('category');
    Route::get('/category/create', 'Admin\CategoryController@createCategory')->name('category_create');
    Route::Post('/category/save', 'Admin\CategoryController@saveCategory')->name('category_save');
    Route::get('/category/edit/{id}', 'Admin\CategoryController@editCategory')->name('category_edit');
    Route::get('/category/delete/{id}', 'Admin\CategoryController@deleteCategory')->name('category_delete');


    Route::get('/programs', 'Admin\ProgramsController@index')->name('programs');
    Route::get('/programs/create', 'Admin\ProgramsController@createPrograms')->name('programs_create');
    Route::Post('/programs/save', 'Admin\ProgramsController@savePrograms')->name('programs_save');
    Route::get('/programs/edit/{id}', 'Admin\ProgramsController@editPrograms')->name('programs_edit');
    Route::get('/programs/delete/{id}', 'Admin\ProgramsController@deletePrograms')->name('programs_delete');


});

Route::get('/forms', 'Admin\FormsController@index')->name('forms');

Route::get('/form-preview/{slug}/{application_id?}', 'Admin\FormsController@formPreview')->name('form-preview');
Route::get('/form-view/{application_id?}', 'Admin\FormsController@formView')->name('form-view');
Route::Post('/forms/save_form1', 'Admin\FormsController@saveForm1')->name('save_form1');
Route::Post('/forms/deleteattachment', 'Admin\FormsController@deleteattachment')->name('deleteattachment');
Route::Post('/forms/save_feedback', 'Admin\FormsController@saveFormFeedback')->name('save_feedback');
Route::Post('/forms/save_feedback_pdf', 'Admin\FormsController@saveFormFeedbackPdf')->name('save_feedback_pdf');
Route::Post('/superadmin-submit-remark', 'Admin\FormsController@superAdminSubmitRemark')->name('superadmin_submit_remark');
Route::Post('/after-upload-remark', 'Admin\FormsController@afterUploadRemark')->name('superadmin_submit_remark');
Route::Post('/superadmin-attachment-set', 'Admin\FormsController@superAdminAttachmentSet')->name('superadmin_attachment_set');

Route::get('/application/user-alerts', 'Admin\ApplicationController@useralerts')->name('useralerts');
Route::get('/application/active', 'Admin\ApplicationController@getAllActive')->name('application_active');
Route::get('/application/active_edit/{id}', 'Admin\ApplicationController@editActive')->name('editActive');
Route::get('/form/approved/{id}', 'Admin\ApplicationController@formApproved')->name('form_approved');
Route::get('/form/reject/{id}', 'Admin\ApplicationController@formreject')->name('form_reject');
Route::get('/form/change_request/{id}', 'Admin\ApplicationController@formChangeRequest')->name('formChangeRequest');
Route::get('/application/rejected', 'Admin\ApplicationController@getAllRejected')->name('application_rejected');
Route::get('/application/approved', 'Admin\ApplicationController@getAllApproved')->name('application_approved');
Route::get('/application/closed', 'Admin\ApplicationController@getAllClosed')->name('application_approved');
Route::get('/application/not-submitted', 'Admin\ApplicationController@notSubmitted')->name('not_submitted');
Route::get('/application/report', 'Admin\ApplicationController@allReport')->name('application_report');
Route::get('/application/report-download', 'Admin\ApplicationController@allReportDownload')->name('application_report_download');
Route::Post('/application/getttotal', 'Admin\ApplicationController@getttotal')->name('getttotal');
Route::Post('/doc_status', 'Admin\ApplicationController@doc_status')->name('doc_status');
Route::get('/application/app-delete/{id}', 'Admin\ApplicationController@appDelete')->name('appDelete');

Route::get('/application/report-excel', 'Admin\ApplicationController@allReportExcelDownload')->name('all_report_excel_download');
Route::get('/application/upload_document/{id}', 'Admin\ApplicationController@getUploadDocument')->name('upload_document');
Route::post('/application/upload_image', 'Admin\ApplicationController@getUploadImage')->name('upload_image');
Route::post('/application/update_upload_image', 'Admin\ApplicationController@updateUploadDocs')->name('update_upload_image');
Route::get('/application/document_status_change/{id}/{application_id}/{flag}', 'Admin\ApplicationController@documentStatusChange')->name('upload_document');
Route::post('/application/document_status_change_remark', 'Admin\ApplicationController@documentStatusChangeRemark')->name('document_status_change_remark');

Route::get('/news/view/{id}', 'Admin\NewsController@viewNews')->name('news_view');
Route::get('/delete-doc-image/{img}/{id}', 'Admin\ApplicationController@deleteDocImage')->name('delete-doc-image');

Route::get('/php-info', function () {
    phpinfo();
});
