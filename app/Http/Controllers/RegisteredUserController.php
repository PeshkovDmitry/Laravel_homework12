<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Welcome;
use App\Models\User;

class RegisteredUserController extends Controller
{
    
    public function store(User $user) {
        $email = "peshkov-dv@yandex.ru";
        \Illuminate\Support\Facades\Mail::to($email)->send(new Welcome($user));
    }

}
