<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Checkavailabilty extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('checkavailabitlies')->insert([
         'bookingdate'=> "16 january,2024",
         'no_persons'=>"2",
         'are_you_student'=>"yes"

        ]);
    }
}
