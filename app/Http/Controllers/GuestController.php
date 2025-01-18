<?php

namespace App\Http\Controllers;

use Illuminate\Mail\Mailables\Address;
use App\Functions\Mail as Mailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class GuestController extends Controller
{
    public function home_view()
    {
        return view('guest.home');
    }

    public function trial_view()
    {
        return view('guest.trial');
    }

    public function success_view()
    {
        return view('guest.success');
    }

    public function mail_action(Request $Request)
    {
        $validator = Validator::make($Request->all(), [
            'full_name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->with([
                'message' => $validator->errors()->all(),
                'type' => 'error'
            ]);
        }

        Mailer::plain([
            'subject' => __('New Trial Request'),
            'from' => new Address($Request->email, $Request->full_name),
            'to' => [
                new Address('ahmedqo1995@gmail.com', 'Ahmed Qo'),
            ],
            'content' => 'Full name: ' . $Request->full_name . PHP_EOL . 'Email: ' . $Request->email . PHP_EOL . 'Phone: ' . $Request->phone . ($Request->message ? (PHP_EOL . 'Message:' . PHP_EOL . $Request->message) : ''),
        ]);

        return view('guest.success');
    }
}
