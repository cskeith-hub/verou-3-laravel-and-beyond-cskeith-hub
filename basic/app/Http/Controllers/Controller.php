<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        return view ('home', ['user'=>$user]);
    }

    public function nextUser($id)
    {
        $user = User::find($id);
        return view ('home', ['user'=>$user]);
    }

    public function previousUser($id)
    {
        $user = User::find($id);
        return view ('home', ['user'=>$user]);
    }

    
}
