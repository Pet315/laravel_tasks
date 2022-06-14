<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    public function workers() {
        return $this->belongsToMany(Worker::class);
    }

}
