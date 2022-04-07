<?php

namespace App\Http\Controllers;

use App\Models\Contactform;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function contactPage()
    {
        return view ('contact/contact_Page');
    }

    public function contactPost(Request $request)
    {
        // dd($request);
        // $guestFname = $request->fname;
        // $guestLname = $request->lname;
        // $guestEmail = $request->email;
        // $guestQuestion = $request->subject;

        $question = new Contactform();
        $question->first_name = $request->firstname;
        $question->last_name = $request->lastname;
        $question->email = $request->email;
        $question->question = $request->subject;

        $question->save();

        return redirect()->back()->with('message', 'Your Question Has Arrived! Response Follows Soon.');
    }
}
