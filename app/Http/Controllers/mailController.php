<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactMail;

class mailController extends Controller
{
    public function contact()
    {
        $var = request()->all();
        Mail::to('primiyahasan@gmail.com')->send(new contactMail($var));
    }
}
