<?php

namespace App\Services;

use App\Http\Requests\TouchStoreRequest;
use App\Http\Requests\TouchUpdateRequest;
use App\Interfaces\ITouchService;
use App\Models\Touch;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class TouchService implements ITouchService
{
    public static function index(): Collection|array
    {
        return Touch::with('touchSubject')->get();
    }

    public static function store(TouchStoreRequest $touchStoreRequest): Builder|Model
    {
        return Touch::query()->create($touchStoreRequest->all());
    }

    public static function show(Touch $touch): Touch
    {
        return $touch;
    }

    public static function update(TouchUpdateRequest $touchUpdateRequest, Touch $touch): bool
    {
        return $touch->update($touchUpdateRequest->all());
    }

    public static function destroy(Touch $touch): ?bool
    {
        return $touch->delete();
    }
}
