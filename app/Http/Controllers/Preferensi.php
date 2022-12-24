<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Preferensi extends Controller
{
    public function create($pilihan){
        $validated = $pilihan->validate([
            'rural' => 'required|unique:posts|max:255',
            'urban' => 'required',
        ]);
    }
}
