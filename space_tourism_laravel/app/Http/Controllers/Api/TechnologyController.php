<?php

namespace App\Http\Controllers\Api;

use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class TechnologyController extends Controller
{
    /**
     * @group Technology
     * Récupérer toutes les technologies
     *
     * Cette route retourne la liste complète des technologies utilisées dans le programme spatial.
     *
     * @response 200 [
     *   {
     *     "id": 1,
     *     "name": "Launch vehicle",
     *     "description": "A launch vehicle or carrier rocket...",
     *     "image": "launch-vehicle.png"
     *   }
     * ]
     */
    public function index(): JsonResponse
    {
        return response()->json(Technology::all());
    }
    public function show($id)
    {
        return Technology::findOrFail($id);
    }
}
