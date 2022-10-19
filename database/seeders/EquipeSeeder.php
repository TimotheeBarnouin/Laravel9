<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\equipe;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        equipe::truncate();

        $json = File::get("database/data/equipes.json");
        $equipes = json_decode($json);

        foreach ($equipes as $equipe) {
            equipe::create([
                "letter" => $equipe->letter
            ]);
        }
        foreach ($equipe as $key => $value) {
        }
    }
}
