<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AccountactiveController extends Controller
{
    //
public function index( ){

    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];

    Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\Accountactivemail($details));
    dd('mail send');
}

}
