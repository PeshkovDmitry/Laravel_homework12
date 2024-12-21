<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class RegisteredUserController extends Controller
{
    
    public function store() {
        $email = "peshkov-dv@yandex.ru";
        Mail::to($email)->send(new Welcome(Auth::user()));
    }

}
