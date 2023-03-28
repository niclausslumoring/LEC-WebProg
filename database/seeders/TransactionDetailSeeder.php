<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactiondetails')->insert([
            [
                'bookid'=>'1',
                'transactionid'=>'1',
                'quantity'=> '3'
            ],
            [
                'bookid'=>'3',
                'transactionid'=>'2',
                'quantity'=> '1'
            ],
            [
                'bookid'=>'2',
                'transactionid'=>'3',
                'quantity'=> '2'
            ]
        ]);
    }
}
