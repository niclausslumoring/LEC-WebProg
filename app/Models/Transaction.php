<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongto(User::class);
    }

    public function transactiondetail(){
        return $this->hasMany(TransactionDetail::class);
    }
}
