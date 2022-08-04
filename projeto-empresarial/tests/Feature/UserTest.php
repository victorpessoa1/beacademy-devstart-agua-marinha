<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use DatabaseTransactions;

    public function test_user()
    {
        $user = User::factory()->create();
        $response = $this->post('/login',[
            'email' => $user->email,
            'password'=> 'password'
        ]);

        $this->actingAs($user);
        $response = $this->get('/users');

        $response->assertStatus(200);
    }

    public function test_create_user()
    {
        $user = User::factory()->create();
        $response = $this->post('/login',[
            'email' => $user->email,
            'password'=> 'password'
        ]);

        $this->actingAs($user);

        $response = $this->get('/users/create');
        $response->assertStatus(200);
    }
}
