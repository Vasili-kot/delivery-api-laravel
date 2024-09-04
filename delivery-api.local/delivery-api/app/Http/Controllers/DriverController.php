<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Получить всех водителей.
     */
    public function index() : \Illuminate\Database\Eloquent\Collection
    {
        return Driver::getAllDrivers();
    }

    /**
     * Сохранить нового водителя.
     */
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $driver = Driver::createDriver($request->all());
        return response()->json($driver, 201);
    }

    /**
     * Показать данные конкретного водителя.
     */
    public function show(Driver $driver): Driver
    {
        return $driver;
    }

    /**
     * Обновить данные водителя.
     */
    public function update(Request $request, Driver $driver): \Illuminate\Http\JsonResponse
    {
        $driver->updateDriver($request->all());
        return response()->json($driver, 200);
    }

    /**
     * Удалить водителя.
     */
    public function destroy(Driver $driver): \Illuminate\Http\JsonResponse
    {
        $driver->deleteDriver();
        return response()->json(null, 204);
    }
}
