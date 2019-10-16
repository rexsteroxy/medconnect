<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function admin() {

        return $this->belongsTo(Admin::class);
    }
    public function jobApplications(){
        return $this->hasMany(JobApplication::class);
    }
}
