<?php

namespace Database\Seeders;

use App\Models\InsuranceCoverType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsuranceCoverTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cover_types = [
            [
                'name' => 'Fully Comprehensive',
                'is_active' => true,
            ],
            [
                'name' => 'Third Party Only',
                'is_active' => true,
            ]
        ];
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('insurance_cover_types')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        InsuranceCoverType::insert($cover_types);
    }
}
