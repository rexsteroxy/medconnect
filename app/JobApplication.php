<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $fillable = [
        'name', 'email', 'phone','cv','user_id','job_id'
    ];
}
