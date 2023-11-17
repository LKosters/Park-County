<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Cell;

class cellTest extends TestCase
{
    public function test_create_delete_cell(): void
    {
        $housenumber = 'Polititiestraat 69';
        $max_inhabitants = 3;
        $tv = 1;
        $isolation = 0;

        $cell = Cell::create([
            'housenumber' => $housenumber,
            'max_inhabitants' => $max_inhabitants,
            'tv' => $tv,
            'isolation' => $isolation,
        ]);

        $this->assertDatabaseHas('cells', [
            'housenumber' => $housenumber,
            'max_inhabitants' => $max_inhabitants,
            'tv' => $tv,
            'isolation' => $isolation,
        ]);

        $cell->delete();

        $this->assertDatabaseMissing('cells', [
            'housenumber' => $housenumber,
            'max_inhabitants' => $max_inhabitants,
            'tv' => $tv,
            'isolation' => $isolation,
        ]);
    }
}
