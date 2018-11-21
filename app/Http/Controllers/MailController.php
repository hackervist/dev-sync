<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // pro
use App\Mail\JoinEmail; // pro
use Illuminate\Support\Facades\Mail; // pro

use App\MailCollab;
use App\User;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    //
     public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'SenderUserName';
        $objDemo->receiver = 'ReceiverUserName';

        Mail::to('ReceiverUserName')->send(new JoinEmail($objDemo));
    }

    public function emailInvite(Request $request)
    {
        $this-> validate($request, ['email'=>'required|string|max:50',]);

        $mailerInvite= MailCollab::create(['email'=> $request->email, 
                                            'fromName'=> Auth::user()->name,
                                            'link_address'=> $request->HDN_FormClicked,
                                        ]);

        $mailerInvite->save();

        alert()->success('Invite', 'Message has been sent!');

        return redirect()->back();
    }

    public function readInvite()
    {
        $invites=MailCollab::All();


        //$user = DB::table('mail_collabs')->where('email', Auth::user()->email)->first();

    

        return view('emails.invite',compact('invites'));
    }


}
