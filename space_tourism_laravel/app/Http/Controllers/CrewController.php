<?php

namespace App\Http\Controllers;

use App\Models\Crew;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CrewController extends Controller
{
    public function index()
    {
        $crews = Crew::paginate(10);
        return view('crew', compact('crews'));
    }
}
