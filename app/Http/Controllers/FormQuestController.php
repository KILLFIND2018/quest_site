<?php

namespace App\Http\Controllers;


use App\Mail\SendMail;
use App\Http\Requests\StoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class FormQuestController extends Controller
{


    public function index()
    {
        return view('welcome');
    }
    public function send(StoreRequest $request)
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
        $data = new \stdClass();
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->mount = $request->mount;
        //отправляет туда все данные и отправляет на страницу result.blade
        Mail::to("Hosting@host.ru")->send(new SendMail($data));


        return view('result');
    }
}
