<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function showData()
    {

        $jsonFile = public_path('Extracta.ai - Data Export - 2024-08-29 (1).json');
        $jsonData = json_decode(file_get_contents($jsonFile), true);
        
        return view('data-table', compact('jsonData'));
    }
}
