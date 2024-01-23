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

    public function submit(Request $request)
{
    // Handle form submission, including file upload
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        // Add validation rules for other fields
        'attachment' => 'file|mimes:stl,obj,3mf,image/jpeg,image/png,image/pdf,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document|max:50',
        // Adjust max file size as needed
    ]);

    // Handle file upload
    if ($request->hasFile('attachment')) {
        $file = $request->file('attachment');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $fileName);
        // You can save the file path in the database or perform other actions here
    }
    // Mail::to('ambrusmarika02@gmail.com')->send(new ContactFormSubmission($request->all()));


    return redirect()->back()->with('success', 'Form submitted successfully!');
}

}
