<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Job;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $user = User::find(1);
        return redirect()->route('user', ['id'=>$user->id]);
    }

    public function user($id)
    {
        $user = User::find($id);
        $previous = User::where("id", "<", $id)
        ->orderBy("id", "desc")
        ->first();
     if ($previous === null) {
        $previous = User::where("id", ">", $id)
            ->orderBy("id", "asc")
            ->get()
            ->last();
    }

    // get next user id
    $next = User::where("id", ">", $id)
        ->orderBy("id", "asc")
        ->first();
        if ($next === null) {
        $next = User::where("id", "<", $id)
            ->orderBy("id", "desc")
            ->get()
            ->last();
    }
     return view("home")
        ->with("previous", $previous)
        ->with("next", $next)
        ->with("user", $user);
    }
    
    

    
}
