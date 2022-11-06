<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Subdivision extends Model
{
    public function workers() {
        return $this->hasMany(Worker::class);
    }
}
