<?php

namespace App\Http\Controllers\Api;

use App\Models\Crew;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class CrewController extends Controller
{
    /**
     * @group Crew
     * 
     * Afficher tous les membres de l’équipage.
     *
     * Cette route retourne la liste complète des membres d’équipage enregistrés dans la base de données.
     *
     * @response 200 scenario="Liste des membres d'équipage"
     * [
     *   {
     *     "id": 1,
     *     "name": "Douglas Hurley",
     *     "role": "Commandant",
     *     "bio": "Douglas Gerald Hurley est un ingénieur américain...",
     *     "image": "douglas-hurley.png",
     *     "created_at": "2024-01-01T00:00:00.000000Z",
     *     "updated_at": "2024-01-01T00:00:00.000000Z"
     *   },
     *   {
     *     "id": 2,
     *     "name": "Mark Shuttleworth",
     *     "role": "Spécialiste mission",
     *     "bio": "Mark Shuttleworth est un entrepreneur et astronaute sud-africain...",
     *     "image": "mark-shuttleworth.png",
     *     "created_at": "2024-01-02T00:00:00.000000Z",
     *     "updated_at": "2024-01-02T00:00:00.000000Z"
     *   }
     * ]
     */
    public function index(): JsonResponse
    {
        return response()->json(Crew::all());
    }

    public function show($id)
    {
        return Crew::findOrFail($id);
    }
}
