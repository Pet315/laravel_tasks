<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public function products() {
        return $this->belongsTo(Product::class);
    }

    public function accounts() {
        return $this->belongsTo(Account::class);
    }
}
