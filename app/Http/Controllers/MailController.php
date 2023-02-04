<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\imageMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function email()
    {
    	Mail::to('svinothkumar0301@gmail.com')->send(new imageMail());
    }
}
