<?php

namespace App\Http\Controllers;

use App\Models\TimeWorked;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
        public function calender()
        {
            $worked = TimeWorked::where('user_id' ,'=' , Auth::user()->id)->get();
    return view('calender')->with(['worked' => $worked]);
    }

    public function dashboard()
    {
        $users = User::all();
        $user = Auth::user();
        if (Auth::user()->role === 'admin') { //2 = Admin
            return view('admin/dashboard')
                ->with(['users' => $users])
                ->with(['user' =>$user]);

        }else{
            return view('dashboard')
                ->with(['user' => $user]);
        }


    }
}
