<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Direction;

class DirectionSeeder extends Seeder
{

    static $directions = [
        'informatique'
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::$directions as $d) {
            Direction::create([
                'nom' => $d,            
                'responsable' => 'Jacob'
            ]);
        }
    }
}
