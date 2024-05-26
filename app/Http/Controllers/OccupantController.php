<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Occupant;
use App\Http\Resources\OccupantResource;
use App\Http\Requests\StoreOccupantRequest;
use App\Http\Requests\UpdateOccupantRequest;

class OccupantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $occupants = Occupant::all();
        return Inertia::render('Occupant/Index', [
            'occupants' => OccupantResource::collection($occupants),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOccupantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Occupant $occupant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Occupant $occupant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOccupantRequest $request, Occupant $occupant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Occupant $occupant)
    {
        //
    }
}
