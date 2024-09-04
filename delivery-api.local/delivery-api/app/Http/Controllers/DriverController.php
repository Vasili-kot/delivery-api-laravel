<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Driver::getAllDrivers();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $driver = Driver::createDriver($request->all());
        return response()->json($driver, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Driver $driver)
    {
        return $driver;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Driver $driver)
    {
        $driver->updateDriver($request->all());
        return response()->json($driver, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Driver $driver)
    {
        $driver->deleteDriver();
        return response()->json(null, 204);
    }
}
