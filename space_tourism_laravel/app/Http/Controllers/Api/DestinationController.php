<?php

namespace App\Http\Controllers\Api;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class DestinationController extends Controller
{
    /**
     * @group Destination
     * Récupérer toutes les destinations
     *
     * Cette route retourne la liste complète des destinations disponibles pour le voyage spatial.
     *
     * @response 200 [
     *   {
     *     "id": 1,
     *     "name": "Moon",
     *     "description": "See our closest celestial neighbor.",
     *     "distance": "384,400 km",
     *     "travel_time": "3 days",
     *     "image": "moon.png"
     *   }
     * ]
     */
    public function index(): JsonResponse
    {
        return response()->json(Destination::all());
    }

    public function show(int $id): JsonResponse
    {
        $destination = Destination::find($id);

        if (!$destination) {
            return response()->json(['message' => 'Destination non trouvée'], 404);
        }

        // Ajouter l'URL complète de l'image
        $destination->image_url = url('media/images/destination/' . $destination->image);

        return response()->json($destination);
    }
}
