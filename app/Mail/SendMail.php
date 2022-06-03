<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $logo = env('APP_URL')."/images/logo.png";

        return $this->subject('Appointment Request')->view('/home/mail');
        // ->with(
        //     [
        //         // 'name' => $data['name'],
        //         // 'email' => $data['email'],
        //         // 'contact_number' => $data['contact_number'],
        //         // 'date' => $data['date'],
        //         // 'time' => $data['time'],
        //         // 'desc' => $data['message'],
        //         // 'logo' => $logo

        //         // 'name' => $data->name,
        //         // 'email' => $data->email,
        //         // 'contact_number' => $data->contact_number,
        //         // 'date' => $data->date,
        //         // 'time' => $data->time,
        //         // 'desc' => $data->message,
        //         // 'logo' => $logo

        //     ]);
        
    }
}
