<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Vehicles;

class vehicleTest extends TestCase
{
    public function test_create_delete_vehicle(): void
    {
        $brand = 'Tesla';
        $model = 'Model 3';
        $year = '2020';
        $automatic = 1;
        $fuel = 'electric';
        $license_plate = '1-ABC-123';

        $vehicle = Vehicles::create([
            'brand' => $brand,
            'model' => $model,
            'year' => $year,
            'automatic' => $automatic,
            'fuel' => $fuel,
            'license_plate' => $license_plate,
        ]);

        $this->assertDatabaseHas('vehicles', [
            'brand' => $brand,
            'model' => $model,
            'year' => $year,
            'automatic' => $automatic,
            'fuel' => $fuel,
            'license_plate' => $license_plate,
        ]);

        $vehicle->delete();

        $this->assertDatabaseMissing('vehicles', [
            'brand' => $brand,
            'model' => $model,
            'year' => $year,
            'automatic' => $automatic,
            'fuel' => $fuel,
            'license_plate' => $license_plate,
        ]);
    }
}
