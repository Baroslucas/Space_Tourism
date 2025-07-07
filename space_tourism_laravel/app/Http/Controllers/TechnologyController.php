<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use App\Http\Controllers\Controller;

class TechnologyController extends Controller
{
    public function index()
    {
        $technologies = Technology::paginate(10);
        return view('technology', compact('technologies'));
    }
}
