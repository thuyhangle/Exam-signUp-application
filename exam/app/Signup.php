<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
    protected $table = 'signups';

    public function exam() {
        return $this->belongsTo('\App\Exam');
    }

    
}
