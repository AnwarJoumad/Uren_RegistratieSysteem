<?php

namespace App\Http\Controllers;

use App\Models\leave;
use App\Models\Task;
use App\Models\TimeWorked;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
        public function calender()
        {
            $worked = TimeWorked::where('user_id' ,'=' , Auth::user()->id)->get();

            $leave = leave::where('user_id' ,'=' , Auth::user()->id)->get();
    return view('calender')->with(['worked' => $worked, 'leave' => $leave]);

            return view('calender')->with(['worked' => $worked]);

    }

    public function tasks()
    {
        if (Auth::user()->role === 'admin') { //2
            $tasks = Task::all();
            return view('tasks/index')->with(['tasks' => $tasks]);
        }
        else{
            redirect('dashboard');
        }
    }

    public function dashboard()
    {
        $users = User::all();
        $user = Auth::user();
        $worked = TimeWorked::where('user_id' ,'=' , Auth::user()->id)->get();
        if (Auth::user()->role === 'admin') { //2 = Admin
            return view('admin/dashboard')
                ->with(['users' => $users])
                ->with(['user' =>$user]);

        }else{
            return view('dashboard')
                ->with(['user' => $user])
                ->with(['worked' => $worked]);
        }


    }

    public function verlofverzoeken(){
        if (Auth::user()->role === 'admin') { //2
            $verlof = leave::all();
            return view('verlofverzoeken')
                ->with(['verlof' => $verlof]);
        }
        else{
            redirect('dashboard');
        }
    }
}
