<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class visit extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("visits")->insert([
            [
                "date" => "2025-05-27",
                "diagnosis" => "nátha",
                "doctor" => "Fás Ferenc",
                "patientId" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "date" => "2025-05-27",
                "diagnosis" => "fejfájás",
                "doctor" => "Figura Ernő",
                "patientId" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "date" => "2025-05-27",
                "diagnosis" => "sportsérülés",
                "doctor" => "Varga Éva",
                "patientId" => 3,
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);
    }
}
