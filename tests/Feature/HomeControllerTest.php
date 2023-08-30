<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    public function test_home(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_get_solution_post_addition(): void
    {
        $payload = [
            '_token' => csrf_token(),
            'number1' => 1,
            'number2' => 2,
            'mathType' => 'addition'
        ];

        $response = $this->post('/get-solution', $payload);
        $response->assertStatus(302);
        $response->assertRedirect('/?number1=' . $payload['number1'] . '&number2=' . $payload['number2'] . '&math-type=' . $payload['mathType'] . '&solution=3');
    }

    public function test_get_solution_post_subtraction(): void
    {
        $payload = [
            '_token' => csrf_token(),
            'number1' => 10,
            'number2' => 5,
            'mathType' => 'subtraction'
        ];

        $this->json('POST', '/get-solution', $payload)
            ->assertStatus(302)
            ->assertRedirect('/?number1=' . $payload['number1'] . '&number2=' . $payload['number2'] . '&math-type=' . $payload['mathType'] . '&solution=5');
    }

    public function test_get_solution_post_multiplication(): void
    {
        $payload = [
            '_token' => csrf_token(),
            'number1' => 2,
            'number2' => 3,
            'mathType' => 'multiplication'
        ];

        $response = $this->post('/get-solution', $payload);
        $response->assertStatus(302);
        $response->assertRedirect('/?number1=' . $payload['number1'] . '&number2=' . $payload['number2'] . '&math-type=' . $payload['mathType'] . '&solution=6');
    }

    public function test_get_solution_post_division(): void
    {
        $payload = [
            '_token' => csrf_token(),
            'number1' => 10,
            'number2' => 2,
            'mathType' => 'division'
        ];

        $response = $this->post('/get-solution', $payload);
        $response->assertStatus(302);
        $response->assertRedirect('/?number1=' . $payload['number1'] . '&number2=' . $payload['number2'] . '&math-type=' . $payload['mathType'] . '&solution=5');
    }

    public function test_get_solution_post_division_by_zero(): void
    {
        $payload = [
            '_token' => csrf_token(),
            'number1' => 10,
            'number2' => 0,
            'mathType' => 'division'
        ];

        $response = $this->post('/get-solution', $payload);
        $response->assertStatus(302);
        $response->assertRedirect('/?number1=' . $payload['number1'] . '&number2=' . $payload['number2'] . '&math-type=' . $payload['mathType'] . '&solution=0');
    }
}
