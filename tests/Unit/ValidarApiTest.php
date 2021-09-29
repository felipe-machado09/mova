<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ValidarApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_validar_api_funcionando()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
