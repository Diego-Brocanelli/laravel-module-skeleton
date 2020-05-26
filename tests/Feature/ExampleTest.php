<?php

namespace Bnw\Skeleton\Tests\Feature;

use App\User;
use Bnw\Skeleton\Tests\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    public function basicOne()
    {
        $response = $this->get('/test');
        $response->assertStatus(200);
    }

    /** @test */
    public function basicTwo()
    {
        $response = $this->get('/test/two');
        $response->assertStatus(200);
    }

     /** @test */
     public function api()
     {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
                    ->withSession(['foo' => 'bar'])
                    ->get('/api/user');
                         
         $response->assertStatus(200);
     }
}
