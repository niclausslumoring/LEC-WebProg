<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    public $table = "transactiondetails";
    public function book(){

    	return $this->belongsTo(Book::class);
    }

    public function transaction(){

    	return $this->belongsTo(Transaction::class);
    }

}
