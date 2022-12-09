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
            $worked = TimeWorked::all();
    return view('calender')->with(['worked' => $worked]);
    }

    public function dashboard()
    {
        $users = User::all();
        if (Auth::user()->role === 'admin') { //2 = Admin
            return view('admin/dashboard')
                ->with(['users' => $users]);

        }else{
            return view('dashboard');
        }


    }
}
