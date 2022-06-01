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

    public $mailData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $logo = env('APP_URL')."/images/logo.png";

        return $this->subject('Appointment Request')->view('mail')
        ->with(
            [
                'name' => 'Nama Lengkap',
                'email' => 'email@gmail.com',
                'contact_number' => '08123456789',
                'date' => 'Senin, 20 Mei 2020',
                'time' => '13:00',
                'desc' => '-',
                'logo' => $logo

            ]);
        
    }
}
