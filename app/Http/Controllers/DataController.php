<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function showData()
    {

        $jsonFile = public_path('//your file name (first upload your file in public directory');
        $jsonData = json_decode(file_get_contents($jsonFile), true);

        return view('data-table', compact('jsonData'));
    }
}
