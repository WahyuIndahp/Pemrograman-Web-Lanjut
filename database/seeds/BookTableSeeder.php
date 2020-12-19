<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'id'=> 1,
            'title' => 'A',
            'author' => 'Nama Pengarang',
            'publication' => 'Wahyu IP',
            'year' => '2020'
        ]);
    }
}
