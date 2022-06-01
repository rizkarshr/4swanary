<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class MailController extends Controller
{
    public function mail(Request $request) {
        
        // $data = array(
        //     'name'=>'-',
        // );
     
        // Mail::send(['text'=>'mail'], $data, function($message) {
        //    $message->to('ummipratidina2@gmail.com', 'Ummi Pratidina')->subject
        //       ('Laravel Basic Testing Mail');
        //    $message->from('hellodee91@gmail.com','Hello Dee');
        // });

        // $mailData = [
        //     'title' => 'This is for testing email.',
        //     'body' => 'This is for testing email.'
        // ];
         
        Mail::to($request->input('email'))->send(new SendMail());

        return response()->json([
            'code' => 200,
            'status' => true,
            'message' => "success",
            'data' => ''
        ]);
     }
}
