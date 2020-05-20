<?php

namespace Bnw\Skeleton\Tests\Feature;

use PHPUnit\Framework\TestCase;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

class ExampleTest extends BaseTestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
