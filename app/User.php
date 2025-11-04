<?php
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use App\Committee;
use App\WhatsappMessage;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    protected $fillable = [
        'name', 'email', 'password', 'committee_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function committee()
    {
        return $this->belongsTo('App\Committee','committee_id','id');
    }

    // ----------------------
    // WhatsApp templates
    // ----------------------
    protected static $templates = [
        'update_program' => [
            'header' => "مرحبا بكم في منصة التضامن الأولمبي",
            'body'   => "تم تحديث تفاصيل برنامج {{1}} من قبل المستخدم.",
            'footer' => "مع تحيات\nاللجنة الأولمبية العمانية\n دائرة التضامن الاولمبي"
        ],
        'new_news_item' => [
            'header' => "لقد تم إضافة خبر جديد في المنصة بعنوان :",
            'body'   => "{{1}}\n\nلقراءة الخبر الرجاء الدخول لموقع المنصة .",
            'footer' => "مع تحيات\nاللجنة الأولمبية العمانية\n دائرة التضامن الاولمبي"
        ],
        'forgot_password' => [
            'header' => "تم إجراء طلب إعادة تعيين كلمة المرور للحساب على",
            'body'   => "أهلا {{1}},\n\nتم إجراء طلب إعادة تعيين كلمة المرور للحساب على https://platform.ooc.om/. يرجى الضغط على الرابط التالي لإعادة تعيين كلمة المرور الخاصة بك. إذا لم تكن قد قدمت أي طلب ، يرجى تجاهل هذا البريد الإلكتروني.\n\n{{2}}",
            'footer' => ""
        ],
        'form_temp_accept_reject_change' => [
            'header' => "مرحبا بكم في منصة التضامن الأولمبي",
            'body'   => "لقد تم مراجعة طلبك :\n\n{{1}}",
            'footer' => "مع تحيات\nاللجنة الأولمبية العمانية\n دائرة التضامن الاولمبي"
        ],
        'upload_document_close' => [
            'header' => "مرحبا بكم في منصة التضامن الأولمبي",
            'body'   => "{{3}}\n\nUser {{2}} uploaded documents for {{3}}.\nFollowing is link for same :-\n{{1}}",
            'footer' => "مع تحيات\nاللجنة الأولمبية العمانية\n دائرة التضامن الاولمبي"
        ],
        'admin_incomplete_application' => [
            'header' => "Documents Incomplete for application",
            'body'   => "أهلا ,\nYou have some incomplete documents for your application. Please click on following link after login to check documents.\n{{1}}",
            'footer' => ""
        ],
        'application_deadline' => [
            'header' => "Application Reminder",
            'body'   => "هذه الرسالة الإلكترونية لإبلاغك بأن الموعد النهائي لتقديم طلبك هو {{1}}. يرجى إرسال جميع المستندات في أقرب وقت ممكن لتفادي اغلاق البرنامج.",
            'footer' => "جميع الحقوق محفوظة."
        ],
        'contact_us' => [
            'header' => "أهلا المشرفين,  فيما يلي تفاصيل المستخدم الذي تم الاتصال به",
            'body'   => "اسم: {{1}}\nالبريد الإلكتروني: {{2}}\nالرسالة: {{3}}",
            'footer' => ""
        ],
        'new_program' => [
            'header' => "مرحبا بكم في منصة التضامن الأولمبي",
            'body'   => "لقد قمت بطلب الاستفادة من برنامج :\n{{1}}\nسيتم مراجعة طلبك والرد عليك في قادم الأوقات",
            'footer' => "مع تحيات\nاللجنة الأولمبية العمانية\n دائرة التضامن الاولمبي"
        ],
        'alert_message' => [
            'header' => "رسالة تنبيه",
            'body'   => "{{1}}",
            'footer' => "مع تحيات\nاللجنة الأولمبية العمانية\n دائرة التضامن الاولمبي"
        ]
    ];

    // ----------------------
    // Utility Methods
    // ----------------------
    protected static function getFinalMessage($templateName, $parameters = [])
{
    if (!isset(self::$templates[$templateName])) return null;

    $header = self::$templates[$templateName]['header'] ?? '';
    $body   = self::$templates[$templateName]['body'] ?? '';
    $footer = self::$templates[$templateName]['footer'] ?? '';

    // Replace placeholders in body only
    foreach ($parameters as $index => $param) {
        $body = str_replace('{{'.($index+1).'}}', $param, $body);
    }

    // Combine header + body + footer
    $message = $header;
    if ($body)   $message .= "\n\n" . $body;
    if ($footer) $message .= "\n\n" . $footer;

    // Append platform link at the end
    $message .= "\n\nhttps://platform.ooc.om";

    return $message;
}

   protected static function saveMessageToDb($recipient_phone_number, $template, $parameters, $message_body, $status = 'pending')
{
    // Try to find the user by phone number
    $user = \App\User::where('phone', $recipient_phone_number)->first();

    $name = $user->name ?? null;
    $email = $user->email ?? null;

    return \App\WhatsappMessage::create([
        'recipient_phone_number' => $recipient_phone_number,
        'template' => $template,
        'parameters' => $parameters,
        'message_body' => $message_body,
        'status' => $status,
        'name' => $name,
        'email' => $email
    ]);
}

    public static function sendCurlRequest($url, $access_token, $data) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Authorization: Bearer $access_token",
            "Content-Type: application/json"
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
    }

    public static function accesstoken(){
        return 'EAAPE6LTXeXoBOwlB8SjCTIyZAOxpromwSEPNc2m0XumCyEjOU5LqlEYSkdRVeYkbct94KzLLzg4EiURIDvMg7ngQXYVZAxyha7ZBBicXvO8rm4NtvhwCUWxyMpTu2PbAR1bZBv1tkbzs8yuDKtmp418kuYy7jaZAPIRLxjRMl2hRwQ1mrptarMEvmeApsxCjAowZDZD';
    }

    public static function phone_number_id(){
        return '465205086673885';
    }

    // ----------------------
    // WhatsApp Message Methods
    // ----------------------
    public static function sendMessageForgot($recipient_phone_number,$text){
        $phone_number_id = self::phone_number_id();
        $name = $text[0];
        $link = $text[1];
        $access_token = self::accesstoken();

        $parameters = [
            ["type" => "text", "text" => $name],
            ["type" => "text", "text" => $link]
        ];

        $data = [
            "messaging_product" => "whatsapp",
            "to" => $recipient_phone_number,
            "type" => "template",
            "template" => [
                "name" => "forgot_password",
                "language" => ["code" => "ar"],
                "components" => [
                    ["type" => "body", "parameters" => $parameters]
                ]
            ]
        ];

        $response = self::sendCurlRequest("https://graph.facebook.com/v20.0/".$phone_number_id."/messages", $access_token, $data);

        $message_text = self::getFinalMessage('forgot_password', [$name, $link]);
        self::saveMessageToDb($recipient_phone_number, 'forgot_password', [$name, $link], $message_text, $response['error'] ?? 'sent');

        return $response;
    }

    public static function sendMessageThreeParam($recipient_phone_number,$text,$template){
        $phone_number_id = self::phone_number_id();
        $one = $text[0];
        $two = $text[1];
        $three = $text[2];
        $access_token = self::accesstoken();

        $parameters = [
            ["type" => "text", "text" => $one],
            ["type" => "text", "text" => $two],
            ["type" => "text", "text" => $three]
        ];

        $data = [
            "messaging_product" => "whatsapp",
            "to" => $recipient_phone_number,
            "type" => "template",
            "template" => [
                "name" => $template,
                "language" => ["code" => "ar"],
                "components" => [
                    ["type" => "body", "parameters" => $parameters]
                ]
            ]
        ];

        $response = self::sendCurlRequest("https://graph.facebook.com/v20.0/".$phone_number_id."/messages", $access_token, $data);

        $message_text = self::getFinalMessage($template, [$one, $two, $three]);
        self::saveMessageToDb($recipient_phone_number, $template, [$one, $two, $three], $message_text, $response['error'] ?? 'sent');

        return $response;
    }

    public static function sendMessage($recipient_phone_number,$title,$template){
        $access_token = self::accesstoken();
        $phone_number_id = self::phone_number_id();

        $parameters = [
            ["type" => "text", "text" => $title]
        ];

        $data = [
            "messaging_product" => "whatsapp",
            "to" => $recipient_phone_number,
            "type" => "template",
            "template" => [
                "name" => $template,
                "language" => ["code" => "ar"],
                "components" => [
                    ["type" => "body", "parameters" => $parameters]
                ]
            ]
        ];

        $response = self::sendCurlRequest("https://graph.facebook.com/v20.0/".$phone_number_id."/messages", $access_token, $data);

        $message_text = self::getFinalMessage($template, [$title]);
        self::saveMessageToDb($recipient_phone_number, $template, [$title], $message_text, $response['error'] ?? 'sent');

        return $response;
    }

    // ----------------------
    // Optional WhatsApp Management
    // ----------------------
    public static function getAllPhoneId(){
        $access_token = self::accesstoken();
        $businessAccount = '441278009071352';
        $url = "https://graph.facebook.com/v21.0/".$businessAccount."/phone_numbers?access_token=".$access_token;        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        $response_data = json_decode($response, true);
        dump($response_data);
    }

    public static function enableTwoStep(){
        $access_token = self::accesstoken();
        $phone_number_id = self::phone_number_id();
        $url = "https://graph.facebook.com/v20.0/".$phone_number_id;        
        $data = ["pin"=> "457914"];
        $response = self::sendCurlRequest($url, $access_token, $data);
        dump($response);
    }

    public static function verifyNumber(){
        $phone_number_id = self::phone_number_id();
        $url = "https://graph.facebook.com/v21.0/".$phone_number_id."/request_code";        
        $data = [
            "code_method"=> "sms",
            'language' => 'ar',
        ];

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        dump($response);
        if (curl_errno($ch)) {
            echo 'cURL error: ' . curl_error($ch);
        } else {
            echo 'Response: ' . $response;
        }
        curl_close($ch);
    }

}
