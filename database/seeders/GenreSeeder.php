<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            ['name'=>'Fantasy'],
            ['name'=>'Mystery'],
            ['name'=>'Romance'],
            ['name'=>'Horror'],
            ['name'=>'Thriller'],
            ['name'=>'Crime'],
            ['name'=>'Drama'],
            ['name'=>'Action'],
            ['name'=>'Fiction'],
            ['name'=>'Science Fiction'],
            ['name'=>'Young-adult'],
            ['name'=>'Novel'],
            ['name'=>'Poetry'],
            ['name'=>'Pen'],
            ['name'=>'Pencil'],
            ['name'=>'Eraser'],
        ]);
    }
}
