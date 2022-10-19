<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\groupe;

use Illuminate\Support\Facades\File;

class GroupeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $json = File::get("database/data/equipes.json");
        $groupes = json_decode($json, false, 512, JSON_THROW_ON_ERROR);

        foreach ($groupes as $obj) {
            foreach ($obj as $groupe) {
                groupe::create([
                    "groupe" => $groupe->letter,
                ]);
            }
        }
    }
}
