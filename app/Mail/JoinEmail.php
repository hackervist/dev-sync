<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class JoinEmail extends Mailable
{
    use Queueable, SerializesModels;
    
    /**
     * The demo object instance.
     *
     * @var Demo
     */
    public $demo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($demo)
    {
        $this->demo = $demo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('sender@dev-sync.co.za')
                    ->subject('Lets Collaborate')
                    ->view('emails.joinLink')
                    ->text('emails.join_plain')
                    ->with(
                      [
                            'testVarOne' => '1',
                            'testVarTwo' => '2',
                      ]);

                     // ->attach(public_path('/images').'/demo.jpg', [
                           //   'as' => 'demo.jpg',
                           //   'mime' => 'image/jpeg',
                 //     ])
                      ;
    }
}