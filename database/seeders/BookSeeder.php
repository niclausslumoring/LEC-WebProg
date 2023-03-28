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
                'title'=>'Atomic Habbits',
                'genreid'=>'3',
                'author'=> 'James Clear',
                'synopsis'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                 the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book.',
                'cover'=>'images/1.jpeg',
                'price'=>'89000'
            ],
            [
                'title'=>'The Art of Not Giving a Fuck',
                'genreid'=>'3',
                'author'=> 'Mark Manson',
                'synopsis'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
                the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
                scrambled it to make a type specimen book.',
                'cover'=>'images/2.jpeg',
                'price'=>'68000'
            ],
            [
                'title'=>'Ego is the Enemy',
                'genreid'=>'3',
                'author'=> 'Ryan Holiday',
                'synopsis'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                 the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
                 scrambled it to make a type specimen book.',
                'cover'=>'images/3.jpeg',
                'price'=>'75000'
            ],
            [
                'title'=>'You Do You',
                'genreid'=>'3',
                'author'=> 'Fellexandro Ruby',
                'synopsis'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                 the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
                 scrambled it to make a type specimen book.',
                'cover'=>'images/4.jpeg',
                'price'=>'120000'
            ],
            [
                'title'=>'Dilan: 1990',
                'genreid'=>'6',
                'author'=> 'Pidi Baiq',
                'synopsis'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
                the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
                scrambled it to make a type specimen book.',
                'cover'=>'images/5.jpeg',
                'price'=>'79000'
            ],
            [
                'title'=>'How to Influence Peaople and Friends',
                'genreid'=>'7',
                'author'=> 'Dale Carnagie',
                'synopsis'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
                the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
                scrambled it to make a type specimen book.',
                'cover'=>'images/6.jpeg',
                'price'=>'50000'
            ],
            [
                'title'=>'The Intelligence Investor',
                'genreid'=>'9',
                'author'=> 'Warren Buffet',
                'synopsis'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys 
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it 
                to make a type specimen book.',
                'cover'=>'images/7.jpeg',
                'price'=>'250000'
            ],
            [
                'title'=>'Trading vs Investing',
                'genreid'=>'3',
                'author'=> 'Ryan Filbert',
                'synopsis'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                 the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
                 scrambled it to make a type specimen book.',
                'cover'=>'images/8.jpeg',
                'price'=>'70000'
            ],
            [
                'title'=>'The Art of Worship',
                'genreid'=>'6',
                'author'=> 'Juan Mogi',
                'synopsis'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
                the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                 scrambled it to make a type specimen book.',
                'cover'=>'images/9.jpeg',
                'price'=>'250000'
            ],
            [
                'title'=>'Rich Dad Poor Dad',
                'genreid'=>'7',
                'author'=> 'Robert Kiyoshaki',
                'synopsis'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
                the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
                scrambled it to make a type specimen book.',
                'cover'=>'images/10.jpeg',
                'price'=>'500000'
            ]
        ]);
    }
}
