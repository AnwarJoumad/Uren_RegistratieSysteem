<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeWorked extends Model
{
    use HasFactory;
    protected $table = 'timeworked';
    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',

    ];

    public function taskName(){
        return $this->belongsTo(Task::class, 'task_id');
    }


}
