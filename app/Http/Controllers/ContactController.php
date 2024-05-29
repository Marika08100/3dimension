<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Log;
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
    public function sendContactMail(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:5,max:100',
            'email' => 'required|email',
            'phone' => 'required|min:7|max:20',
            'subject' => 'required|min:5,max:100',
            'message' => 'required|min:10|max:255',
            'attachment' => 'required|mimes:stl,obj,3mf,pdf,doc,docx,xls,xlsx,csv|max:2048',
        ]);

        try{
            if($request->hasFile('attachment')){
                $fileName = time() . '.' . $request->file('attachment')->extension();
                $request->file('attachment')->move('attachment',$fileName);


                $adminMail = 'szekely.robert3@gmail.com';

                $response = Mail::to($adminMail)->send(new WelcomeEmail($request->all(), $fileName));

                if($response){
                    return back()->with('success','Thank you for contacting us!');
                }
                return back()->with('error','Unable to submit contact form. Please try again.');
            }

        }
        catch(Exception $e) {
            dd('Unabel : ' . $e->getMessage());
        }
    }


}
