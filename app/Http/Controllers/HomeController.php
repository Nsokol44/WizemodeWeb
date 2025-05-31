<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

 public function contact(Request $request)
    {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'service' => 'required|string',
        'message' => 'required|string|max:1000',
    ]);

    $data = $request->only('name', 'email', 'service', 'message');

    // Send email to Wizemode@gmail.com
    Mail::to('Wizemode@gmail.com')->send(new ContactFormMail($data));

    return back()->with('success', 'Thank you for your message! We\'ll get back to you soon.');
    }
}
