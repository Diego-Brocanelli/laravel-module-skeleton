<?php

namespace Bnw\Skeleton\Tests\Feature;

use Bnw\Skeleton\Tests\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    public function basicTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $this->assertTrue(true);
    }
}
