<?php

namespace App\Http\Controllers\Admin;

use App\Models\Crew;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CrewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crews = Crew::paginate(10);
        return view('admin.crews.index', compact('crews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.crews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image_url' => 'nullable|image|max:2048',
            'role' => 'required|string',
            'bio' => 'required|string',

        ]);

        Crew::create($validated);

        return redirect()->route('admin.crews.index')->with('success', "Membre d'équipage ajoutée avec succès !");
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
        $crew = Crew::findOrFail($id);
        return view('admin.crews.edit', compact('crew'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string',
            'bio' => 'required|string',
            'image_url' => 'nullable|string',
        ]);

        $crew = Crew::findOrFail($id);
        $crew->update($validated);

        return redirect()->route('admin.crews.index')->with('success', "Membre d'équipage mis à jour avec succès !");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Crew $crew)
    {
        $crew->delete();
        return redirect()->route('admin.crews.index')->with('success', "Membre d'équipage supprimée avec succès !");
    }
}
