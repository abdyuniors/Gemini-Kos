<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\RoomOccupant;
use App\Http\Resources\RoomOccupantResource;
use App\Http\Requests\StoreRoomOccupantRequest;
use App\Http\Requests\UpdateRoomOccupantRequest;

class RoomOccupantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roomOccupants = RoomOccupant::all();
        return Inertia::render('RoomOccupant/Index', [
            'roomOccupants' => RoomOccupantResource::collection($roomOccupants),
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
    public function store(StoreRoomOccupantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RoomOccupant $roomOccupant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RoomOccupant $roomOccupant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomOccupantRequest $request, RoomOccupant $roomOccupant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RoomOccupant $roomOccupant)
    {
        //
    }
}
