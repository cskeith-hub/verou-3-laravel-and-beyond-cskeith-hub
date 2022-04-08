<?php

namespace App\Http\Controllers;

use App\Models\Contactform;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactPage()
    {
        return view('contact/contact_Page');
    }

    public function contactPost(Request $request)
    {
        $question = new Contactform();
        $question->first_name = $request->firstname;
        $question->last_name = $request->lastname;
        $question->email = $request->email;
        $question->question = $request->subject;

        $question->save();

        return redirect()->back()->with('message', 'Your question has arrived! Response follows soon.');
    }
}
