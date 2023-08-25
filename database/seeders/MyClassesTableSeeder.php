<?php
namespace Database\Seeders;

use App\Models\ClassType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MyClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_classes')->delete();
        $ct = ClassType::pluck('id')->all();

        $data = [
            ['name' => 'Rekayasa Perangkat Lunak', 'class_type_id' => $ct[1]],
            ['name' => 'Rekayasa Perangkat Lunak', 'class_type_id' => $ct[2]],
            ['name' => 'Rekayasa Perangkat Lunak', 'class_type_id' => $ct[3]],

            ['name' => 'Akuntansi dan Keuangan Lembaga', 'class_type_id' => $ct[1]],
            ['name' => 'Akuntansi dan Keuangan Lembaga', 'class_type_id' => $ct[2]],
            ['name' => 'Akuntansi dan Keuangan Lembaga', 'class_type_id' => $ct[3]],

            ['name' => 'Tata Kelola Perkantoran', 'class_type_id' => $ct[1]],
            ['name' => 'Tata Kelola Perkantoran', 'class_type_id' => $ct[2]],
            ['name' => 'Tata Kelola Perkantoran', 'class_type_id' => $ct[3]],

            ['name' => 'Pemasaran', 'class_type_id' => $ct[1]],
            ['name' => 'Pemasaran', 'class_type_id' => $ct[2]],
            ['name' => 'Pemasaran', 'class_type_id' => $ct[3]],

            ['name' => 'Usaha Perjalanan Pariwisata', 'class_type_id' => $ct[1]],
            ['name' => 'Usaha Perjalanan Pariwisata', 'class_type_id' => $ct[2]],
            ['name' => 'Usaha Perjalanan Pariwisata', 'class_type_id' => $ct[3]],

            ['name' => 'Multimedia', 'class_type_id' => $ct[1]],
            ['name' => 'Multimedia', 'class_type_id' => $ct[2]],
            ['name' => 'Multimedia', 'class_type_id' => $ct[3]],

            ['name' => 'Produksi Film dan Program Televisi', 'class_type_id' => $ct[1]],
            ['name' => 'Produksi Film dan Program Televisi', 'class_type_id' => $ct[2]],
            ['name' => 'Produksi Film dan Program Televisi', 'class_type_id' => $ct[3]],
            ];

        DB::table('my_classes')->insert($data);

    }
}
