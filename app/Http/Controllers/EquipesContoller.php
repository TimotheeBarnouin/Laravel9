<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\equipe;

class EquipesContoller extends Controller
{

    public function list()
    {
        $equipe = equipe::all();
        return view('equipe', compact('equipe'));
    }

    public function show()
    {;
    }

    public function new()
    {;
    }

    public function create()
    {;
    }

    public function edit()
    {;
    }

    public function update()
    {;
    }

    public function delete()
    {;
    }

    public function destroy()
    {;
    }
}
