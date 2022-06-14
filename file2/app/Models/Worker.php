<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    public function subdivisions() {
        return $this->belongsTo(Subdivision::class);
    }

    public function professions() {
        return $this->belongsToMany(Profession::class);
    }

}
