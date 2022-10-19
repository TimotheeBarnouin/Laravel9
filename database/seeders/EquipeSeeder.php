<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\equipe;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = -1;
        $json = File::get("database/data/equipes.json");
        $jsonFile = json_decode($json, false, 512, JSON_THROW_ON_ERROR);
        $groupeID = DB::table('groupe')->pluck('id');
        foreach ($jsonFile as $obj) {
            foreach ($obj as $groupe) {
                $i++;
                foreach ($groupe->teams as $teams) {
                    Equipe::create([
                        "pays" => $teams->name,
                        "drapeau" => $teams->country,
                        "groupe_id" => $groupeID[$i],
                    ]);
                }
            }
        }
    }
}
