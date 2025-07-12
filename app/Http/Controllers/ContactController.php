<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use App\Mail\ContactFormConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'ime' => 'required|string|max:255',
            'email' => 'required|email',
            'tip_projekta' => 'required|string',
            'poruka' => 'required|string',
        ]);

        // 1) Email prijema poruke
        Mail::to('borisboncic95@gmail.com')->queue(new ContactFormSubmitted($validated));

        // 2) Email potvrde klijentu
        Mail::to($validated['email'])->queue(new ContactFormConfirmation($validated));

        return back()->with('success', __('projekti.hero.form.success'));
    }
}