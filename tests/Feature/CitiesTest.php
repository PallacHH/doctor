<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CitiesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function admin_user_can_view_create_city_page()
    {
        $this->withoutExceptionHandling();
        $user = factory('App\User')->create(['role' => 'admin']);

        $this->actingAs($user);

        $this->get(route('city.create'))
            ->assertStatus(200)
            ->assertSee('Название');
    }

    /** @test */
    public function not_admin_user_cannot_view_create_city_page()
    {
        $user = factory('App\User')->create();

        $this->get(route('city.create'))
            ->assertStatus(403);

        $this->actingAs($user);

        $this->get(route('city.create'))
            ->assertStatus(403);
    }

    /** @test */
    public function admin_user_can_create_city()
    {
        $this->withoutExceptionHandling();
        $user = factory('App\User')->create(['role' => 'admin']);

        $this->actingAs($user);
        $city = factory('App\City')->make();


        $this->post('/city', $city->toArray());
    }
}
