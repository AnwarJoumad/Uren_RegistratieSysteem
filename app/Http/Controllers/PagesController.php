<?php

namespace App\Http\Controllers;

use App\Models\TimeWorked;
use Illuminate\Http\Request;

class PagesController extends Controller
{
        public function calender()
        {
            $worked = TimeWorked::all();
    return view('calender')->with(['worked' => $worked]);
    }
}
