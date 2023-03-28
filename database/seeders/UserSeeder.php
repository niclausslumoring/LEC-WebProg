<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'roleid' => 1,
                'email' => 'jason@gmail.com',
                'password' => bcrypt('ALEX1234'),
                'fullname' => 'Alex',
            ],
            [
                'roleid' => 1,
                'email' => 'niclausslumoring@gmail.com',
                'password' => bcrypt('SYMPHONY'),
                'fullname' => 'Symphony',
            ],
            [
                'roleid' => 2,
                'email' => 'irvin@gmail.com',
                'password' => bcrypt('SOMEONELIKEYOU'),
                'fullname' => 'Adele',
            ],
            [
                'roleid' => 2,
                'email' => 'Herpin@gmail.com',
                'password' => bcrypt('NERD1234'),
                'fullname' => 'Ralph',
            ],
            [
                'roleid' => 2,
                'email' => 'Cristianto@gmail.com',
                'password' => bcrypt('DEUS1234'),
                'fullname' => 'Deus',
            ],
        ]);
    }
}
