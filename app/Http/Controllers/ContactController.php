<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('contact');
    }
    public function post_message(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'attachment' => 'file|mimes:stl,obj,3mf,image/jpeg,image/png,image/pdf,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document|max:50',
        ]);
        $data = [
            'name' => $request->name,
            'phone' => $request ->phone,
            'email' => $request ->email,
            'subject' =>$request ->subject,
            'message' =>$request->message,
            'attachment' =>$request ->attachment,
        ];
        //send email to admin
        Mail::to('ambrusmarika02@gmail.com')->send(new ContactFormSubmission($data));

      return back()->with('msg','Thanks');
    }


}
