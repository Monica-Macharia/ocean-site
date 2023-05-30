<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class Owner extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Owner::create([
            'name' => 'John Doe',
            'location' => 'jokoto',
            'gender' => 'female'
        ]);
        Owner::create([
            'name' => 'James Doe',
            'location' => 'Nakoto',
            'gender' => 'female'
        ]);
        Owner::create([
            'name' => 'Hakuti Doe',
            'location' => 'Jofolo',
            'gender' => 'female'
        ]);
        Owner::create([
            'name' => 'Haiti Doel',
            'location' => 'Jasefo',
            'gender' => 'male'
        ]);
    }
}
