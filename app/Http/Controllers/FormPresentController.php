<?php

namespace App\Http\Controllers;

use App\Mail\PresentMail;
use App\Http\Requests\PresentRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class FormPresentController extends Controller
{

    public function sender(PresentRequest $request)
    {
        /* ВАРИАНТ 1
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $mount = $request->mount;

        $data = [
            'name'    => $request->name,
            'phone'    => $request->phone,
                'email'    => $request->email,
                'mount'    => $request->mount,
            ];
    
        Mail::send('result', $data, function ($message) use ($email) {
            $message->to('test@test.ru', 'Email TO');
            $message->from($email, "Sender Name");
        });
        echo "HTML Email Sent. Check your inbox.";
        */
        //ВАРИАНТ 2 БЕЗ ПОДСТАНОВКИ В ОТПРАВИТЕЛЯ $EMAIL
        //Принимает данные с валидацией
        $data1 = new \stdClass();
        $data1->name1 = $request->name1;
        $data1->phone1 = $request->phone1;
        $data1->email1 = $request->email1;
        //отправляет туда все данные и отправляет на страницу result.blade
        Mail::to("Hosting@host.ru")->send(new PresentMail($data1));


        return view('result');
    }
}
