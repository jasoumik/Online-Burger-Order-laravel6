<?php

namespace Tests\Feature;

use App\Burger;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BurgerTest extends TestCase
{
  //  use RefreshDatabase;
    /** @test */
    public function only_logged_in_users_can_see_the_orders()
    {
        $response = $this->get('/burgers')->assertRedirect('/login');
    }

     /** @test */
     public function auth_users_can_see_the_orders()
     {
        $this->actingAs(factory(User::class)->create());
         $response = $this->get('/burgers')->assertOk();
     }
      /** @test */
      public function auth_users_can_complete_the_orders()
      {
        //  $this->actingAs(factory(User::class)->create());
          $response = $this->delete('/burgers/{id}');
          $this->assertCount(0,Burger::all());
      }
}
