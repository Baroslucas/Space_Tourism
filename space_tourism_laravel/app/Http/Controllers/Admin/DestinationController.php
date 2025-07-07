<?php

namespace App\Http\Controllers\Admin;

use App\Models\Destination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations = Destination::paginate(10);
        return view('admin.destinations.index', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.destinations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'distance' => 'required|integer|min:0',
            'travel_time' => 'required|integer|min:0',
            'image_url' => 'nullable|image|max:2048',
        ]);

        Destination::create($validated);

        return redirect()->route('admin.destinations.index')->with('success', 'Destination ajoutée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $destination = Destination::findOrFail($id);
        return view('admin.destinations.edit', compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image_url' => 'nullable|string',
        ]);

        $destination = Destination::findOrFail($id);
        $destination->update($validated);

        return redirect()->route('admin.destinations.index')->with('success', 'Destination mise à jour avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        $destination->delete();
        return redirect()->route('admin.destinations.index')->with('success', 'Destination supprimée avec succès !');
    }
}
