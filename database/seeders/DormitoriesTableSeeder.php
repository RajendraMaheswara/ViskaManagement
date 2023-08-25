<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DormitoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dormitories')->delete();
        $data = [
            ['name' => 'Asrama 1'],
            ['name' => 'Asrama 2'],
            ['name' => 'Asrama 3'],
        ];
        DB::table('dormitories')->insert($data);
    }
}
