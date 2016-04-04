<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = 'exams';

    public function signups() {
        return $this->hasMany('\App\Signup');
    }
}
