<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Test::create([
            'Name'=>'De thi hoc ki',	
            'Description'=>'',
            'Time'=>"0:50:00",
            'Quantity'=>1
        ])
        
        ;Test::create([
            'Name'=>'De thi THPT-QG',	
            'Description'=>'',
            'Time'=>"0:50:00",
            'Quantity'=>1
        ]);Test::create([
            'Name'=>'De thi bla bla:))',	
            'Description'=>'',
            'Time'=>"0:50:00",
            'Quantity'=>1
        ]);
    }
}
