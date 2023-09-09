<?php

namespace App\Http\Controllers;

use App\Http\Requests\TouchStoreRequest;
use App\Http\Requests\TouchUpdateRequest;
use App\Models\Touch;
use App\Services\TouchService;

class TouchController extends Controller
{
    public function create()
    {
        abort(404);
    }

    public function edit()
    {
        abort(404);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(TouchService::index());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TouchStoreRequest $touchStoreRequest)
    {
        return response()->json(TouchService::store($touchStoreRequest));
    }

    /**
     * Display the specified resource.
     */
    public function show(Touch $touch)
    {
        return response()->json(TouchService::show($touch));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TouchUpdateRequest $touchUpdateRequest, Touch $touch)
    {
        return response()->json(TouchService::update($touchUpdateRequest, $touch));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Touch $touch)
    {
        return response()->json(TouchService::destroy($touch));
    }
}
