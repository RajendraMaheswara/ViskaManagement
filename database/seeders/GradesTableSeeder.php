<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->delete();

        $this->createGrades();
    }

    protected function createGrades()
    {

        $d = [
            ['name' => 'A', 'mark_from' => 90, 'mark_to' => 100, 'remark' => 'Sangat Bagus'],
            ['name' => 'B', 'mark_from' => 80, 'mark_to' => 89, 'remark' => 'Sangat Baik'],
            ['name' => 'C', 'mark_from' => 70, 'mark_to' => 79, 'remark' => 'Baik'],
            ['name' => 'D', 'mark_from' => 60, 'mark_to' => 69, 'remark' => 'Lulus'],
            ['name' => 'E', 'mark_from' => 0, 'mark_to' => 59, 'remark' => 'Belajar Lagi'],
        ];
        DB::table('grades')->insert($d);
    }
}
