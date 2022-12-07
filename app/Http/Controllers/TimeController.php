<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\TimeWorked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tasks = Task::all();
        return view('works.create')->with(['tasks' => $tasks]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $startday = strtotime($request->end_time);
        $endday = strtotime($request->start_time);
        $totalworked = round(abs($startday - $endday) / 3600,2);



        $timeworked = new TimeWorked();
        $timeworked->start_time = $request->start_time;
        $timeworked->end_time = $request->end_time;
        $timeworked->break_time = $request->break;
        $timeworked->total_time = $totalworked;
        $timeworked->time_worked = $totalworked - $request->break;
        $timeworked->date = date('y-m-d', strtotime($request->start_time));
        $timeworked->user_id = Auth::id();
        $timeworked->task_id = $request->task;

        $timeworked->save();

        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
