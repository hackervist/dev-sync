<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Document;

use App\User;

use App\Profile;
use App\Widget;

class AdminController extends Controller
{

    public function __construct()
    {

        $this->middleware(['auth', 'admin']);

    }
    public function index()
    {
        return view('admin.index');
    }

     public function download()
    {

    	return view('admin.downloads');
    }


    public function report()
    {
        // $subscribed = User::where('is_subscribed', '=', true );
        

        $pro = Profile::All();
        $subscribed= User::All();
        $files = Widget::All();
       // $subscribed = User::where('status_id','=',10);

       // $subscribed = User::All();
        return view('admin.report', compact('subscribed','pro','files'));
    }

}
