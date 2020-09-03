<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Mail\AppointmentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AppointmentController extends Controller
{
    public function index(AppointmentRequest $request)
    {
        $mail = new AppointmentMail(
            $request->input('name'),
            $request->input('email'),
            $request->input('procedure'),
            $request->input('phone'),
            $request->input('message') ?? null
        );

        Mail::to($request->input('email'))->send($mail);
        Mail::to('info@bijedith.nl')->send($mail);

        return redirect('/')->with('success', 'Contactaanvraag is succesvol verzonden!');
    }
}
