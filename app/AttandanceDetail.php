<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttandanceDetail extends Model
{
    protected $guarded = [];

    public function attendance()
    {
        return $this->belongsTo(Attendance::class);
    }
}
