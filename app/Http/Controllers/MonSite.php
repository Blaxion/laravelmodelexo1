<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\User;
use Illuminate\Http\Request;

class MonSite extends Controller
{
    public function ctrlclasses(){
        $classes = Classe::all();
        return view('classes',compact("classes"));
    }

    public function ctrlusers(){
        $users = User::all();
        return view('pages.users',compact("users"));
    }
}
