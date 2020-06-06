<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $guarded = [];


    protected $casts = [
        'job_deadline' => 'datetime',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
