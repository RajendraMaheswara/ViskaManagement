<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dorms')->delete();
        $data = [
            ['name' => 'Asrama 1'],
            ['name' => 'Asrama 2'],
            ['name' => 'Asrama 3'],
        ];
        DB::table('dorms')->insert($data);
    }
}
