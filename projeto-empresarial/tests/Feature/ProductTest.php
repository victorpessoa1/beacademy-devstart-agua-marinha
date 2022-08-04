<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientTest extends TestCase
{
    public function test_create_product()
    {

        $response = $this->post('/login',[
            'email' => 'bapostolico@gmail.com',
            'password'=> '12345678'
        ]);

        $response = $this->get('/products/create');

        $response->assertStatus(200);
    }
    public function teste_store_product()
    {
        $response = $this->post('/login',[
            "email" => "bapostolico@gmail.com",
            "password"=> "12345678"
        ]);

        $response = $this->post('/product',[
            "name"=> "BTC teste",
            "description"=> "teste",
            'price'=>'100'
        ]);

        $response = $this->get('/products');

        $response->assertStatus(200);
    }

}
