<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            [
                'transactiondate' => '2021-12-10',
                'userid' => 3,
            ],
            [
                'transactiondate' => '2021-12-11',
                'userid' => 4,
            ],
            [
                'transactiondate' => '2021-12-12',
                'userid' => 5,
            ],
        ]);
    }
}
