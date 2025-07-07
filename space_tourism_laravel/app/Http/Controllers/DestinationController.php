<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::paginate(10);
        return view('destination', compact('destinations'));
    }
}
