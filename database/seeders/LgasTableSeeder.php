<?php
namespace Database\Seeders;

use App\Models\Lga;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LgasTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('lgas')->delete();

        $state_id = [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1
        ];

        $lgas = [
            "Banjarnegara", "Batur", "Bawang", "Kalibening", "Karangkobar", "Madukara", "Mandiraja", "Pagedongan", "Pagentan", "Pandanarum", "Pejawaran", "Punggelan", "Purwonegoro", "Purworejo Klampok", "Rakit", "Sigaluh", "Susukan", "Wanadadi", "Wanayasa",

        ];

        for($i=0; $i<count($lgas); $i++){
            Lga::create(['state_id' => $state_id[$i], 'name' => $lgas[$i]]);
        }
    }

}
