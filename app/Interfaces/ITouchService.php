<?php

namespace App\Interfaces;

use App\Http\Requests\TouchStoreRequest;
use App\Http\Requests\TouchUpdateRequest;
use App\Models\Touch;

interface ITouchService
{
    public static function index();
    public static function store(TouchStoreRequest $touchStoreRequest);
    public static function show(Touch $touch);
    public static function update(TouchUpdateRequest $touchUpdateRequest, Touch $touch);
    public static function destroy(Touch $touch);
}
