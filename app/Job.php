<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = "jobs";
    protected $guarded = [];


    protected $casts = [
        'job_deadline' => 'datetime',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function jobslugs(){
        return $this->hasOne('App\Jobslug');
     }

    public function reports(){
        return $this->hasMany('App\Report');
     }
}
