<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Http\Requests\AppointmentRequest;
use App\Mail\AppointmentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Throwable;

class AppointmentController extends Controller
{
    public function index(AppointmentRequest $request)
    {
        $appointment = Appointment::create([
            'name'      => $request->input('name'),
            'email'     => $request->input('email'),
            'procedure' => $request->input('procedure'),
            'phone'     => $request->input('phone'),
            'message'   => $request->input('message') ?? null,
        ]);

        $mail = new AppointmentMail(
            $appointment->name,
            $appointment->email,
            $appointment->procedure,
            $appointment->phone,
            $appointment->message
        );

        try {
            Mail::to($appointment->email)->send($mail);
            Mail::to('info@bijedith.nl')->send($mail);
        } catch (Throwable $exception) {
            Log::error('Failed to send appointment mail.', [
                'appointment_id' => $appointment->id,
                'exception'      => $exception->getMessage(),
            ]);
        }

        return redirect('/')->with('success', 'Contactaanvraag is succesvol verzonden!');
    }
}
