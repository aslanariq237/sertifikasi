<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Tarif;

class TarifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Tarif::create([
            "daya" => "450",
            "tarifperkwh" => "300",
        ]);
        $data = Tarif::create([
            "daya" => "900",
            "tarifperkwh" => "700",
        ]);
        $data = Tarif::create([
            "daya" => "450",
            "tarifperkwh" => "300",
        ]);
    }
}
