<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class patient extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("patients")->insert([
            [
                "name" => "John Doe",
                "birthDate" => "1990-01-01",
                "socialNumber" => "1234567890",
                "phone" => "1234567890",
                "created_at" => now(),
                "updated_at" => now(),           

            ],
            [
                "name" => "Jane Doe",
                "birthDate" => "1990-01-01",
                "socialNumber" => "1234567890",
                "phone" => "1234567890",
                "created_at" => now(),
                "updated_at" => now(),            
            ],
            [
                "name" => "John Doe",
                "birthDate" => "1990-01-01",
                "socialNumber" => "1234567890",
                "phone" => "1234567890",
                "created_at" => now(),
                "updated_at" => now(),            
            ],
            [
                "name" => "John Doe",
                "birthDate" => "1990-01-01",
                "socialNumber" => "1234567890",
                "phone" => "1234567890",
                "created_at" => now(),
                "updated_at" => now(),            
            ],
            [
                "name" => "John Doe",
                "birthDate" => "1990-01-01",
                "socialNumber" => "1234567890",
                "phone" => "1234567890",
                "created_at" => now(),
                "updated_at" => now(),            
            ]
    ]);
    }
}
