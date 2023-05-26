<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'title'=>'Forsa',
                'genreid'=>'3',
                'synopsis'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                 the industry standard Fdummy text ever since the 1500s, when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book.',
                'cover'=>'images/forza.jpg',
                'price'=>'89000'
            ],
            [
                'title'=>'Hauga',
                'genreid'=>'3',
                'synopsis'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
                the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
                scrambled it to make a type specimen book.',
                'cover'=>'images/hauga.jpg',
                'price'=>'68000'
            ],
            [
                'title'=>'Langkapten',
                'genreid'=>'3',
                'synopsis'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                 the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
                 scrambled it to make a type specimen book.',
                'cover'=>'images/langkapten.jpeg',
                'price'=>'75000'
            ],
            [
                'title'=>'Klippan',
                'genreid'=>'4',
                'synopsis'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                 the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
                 scrambled it to make a type specimen book.',
                'cover'=>'images/klippan.jpg',
                'price'=>'75000'
            ],
        ]);
    }
}
