<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcomeEmail($user, $password)
    {
        $firstline = "مرحبا بكم في منصة التضامن الأولمبي";
        $secondline = "لقد تم تسجيلك في منصة التضامن الأولمبي ، يمكنك الدخول للمنصة من خلال هذه المعلومات";
        $regards = "مع تحيات";
        $data = ['mail' => $user->email, 'password' => $password, 'level' => 'success', 'actionUrl' => route('login'), 'actionText' => 'Login to your member account', 'outroLines' => [0 => $regards, 1 => 'اللجنة الأولمبية العمانية'], 'introLines' => [0 => $firstline, 1 => $secondline]];

        Mail::send('emails.user_register_mail', $data, function ($m) use ($user) {
            $m->from('no-reply@ooc.om', 'Olympic Solidarity');
            $m->to($user->email, $user->name)->subject('Welcome to the Olympic Solidarity!');
            $m->bcc('vaibhav@icodeanalyst.com', $name = 'RV');
        });
    }
}
