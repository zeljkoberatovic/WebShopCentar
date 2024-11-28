<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Store;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoreTest extends TestCase
{
    //use RefreshDatabase;

    public function test_store_page_is_accessible()
    {
        $response = $this->get(route('stores'));
        $response->assertStatus(200);
        $response->assertSee('Naše Prodavnice');
    }

    public function test_store_page_displays_stores()
    {
        $stores = Store::factory()->count(5)->create();

        $response = $this->get(route('stores'));

        foreach ($stores as $store) {
            $response->assertSee($store->name);
            $response->assertSee($store->location);
            $response->assertSee($store->description);
        }
    }

    public function test_store_page_handles_no_stores()
    {
        $response = $this->get(route('stores'));
        $response->assertStatus(200);
        $response->assertSee('Trenutno nema dostupnih prodavnica.');
    }
}
