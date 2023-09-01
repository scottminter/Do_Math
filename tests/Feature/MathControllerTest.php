<?php

namespace Tests\Feature;

use Tests\TestCase;

class MathControllerTest extends TestCase
{
    public function test_home(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_get_solution_post_addition_right(): void
    {
        $payload = [
            'number1' => 1,
            'number2' => 2,
            'mathType' => 'addition',
            'rightOrWrong' => 'right',
        ];

        $response = $this->post('/get-solution', $payload);
        $response->assertStatus(302);
        $response->assertRedirect('/?number1=' . $payload['number1'] . '&number2=' . $payload['number2'] . '&math-type=' . $payload['mathType'] . '&solution=3&rightorwrong=right');
    }

    public function test_get_solution_post_addition_wrong(): void
    {
        $payload = [
            'number1' => 1,
            'number2' => 2,
            'mathType' => 'addition',
            'rightOrWrong' => 'wrong',
        ];

        $response = $this->post('/get-solution', $payload);
        $response->assertStatus(302);
        $response->assertRedirect('/?number1=' . $payload['number1'] . '&number2=' . $payload['number2'] . '&math-type=' . $payload['mathType'] . '&solution=3&rightorwrong=wrong');
    }

    public function test_get_solution_post_subtraction_right(): void
    {
        $payload = [
            'number1' => 10,
            'number2' => 5,
            'mathType' => 'subtraction',
            'rightOrWrong' => 'right'
        ];

        $this->json('POST', '/get-solution', $payload)
            ->assertStatus(302)
            ->assertRedirect('/?number1=' . $payload['number1'] . '&number2=' . $payload['number2'] . '&math-type=' . $payload['mathType'] . '&solution=5&rightorwrong=right');
    }

    public function test_get_solution_post_subtraction_wrong(): void
    {
        $payload = [
            'number1' => 10,
            'number2' => 5,
            'mathType' => 'subtraction',
            'rightOrWrong' => 'wrong'
        ];

        $this->json('POST', '/get-solution', $payload)
            ->assertStatus(302)
            ->assertRedirect('/?number1=' . $payload['number1'] . '&number2=' . $payload['number2'] . '&math-type=' . $payload['mathType'] . '&solution=5&rightorwrong=wrong');
    }

    public function test_get_solution_post_multiplication_right(): void
    {
        $payload = [
            'number1' => 2,
            'number2' => 3,
            'mathType' => 'multiplication',
            'rightOrWrong' => 'right',
        ];

        $response = $this->post('/get-solution', $payload);
        $response->assertStatus(302);
        $response->assertRedirect('/?number1=' . $payload['number1'] . '&number2=' . $payload['number2'] . '&math-type=' . $payload['mathType'] . '&solution=6&rightorwrong=right');
    }

    public function test_get_solution_post_multiplication_wrong(): void
    {
        $payload = [
            'number1' => 2,
            'number2' => 3,
            'mathType' => 'multiplication',
            'rightOrWrong' => 'wrong',
        ];

        $response = $this->post('/get-solution', $payload);
        $response->assertStatus(302);
        $response->assertRedirect('/?number1=' . $payload['number1'] . '&number2=' . $payload['number2'] . '&math-type=' . $payload['mathType'] . '&solution=6&rightorwrong=wrong');
    }

    public function test_get_solution_post_division_right(): void
    {
        $payload = [
            'number1' => 10,
            'number2' => 2,
            'mathType' => 'division',
            'rightOrWrong' => 'right',
        ];

        $response = $this->post('/get-solution', $payload);
        $response->assertStatus(302);
        $response->assertRedirect('/?number1=' . $payload['number1'] . '&number2=' . $payload['number2'] . '&math-type=' . $payload['mathType'] . '&solution=5&rightorwrong=right');
    }

    public function test_get_solution_post_division_wrong(): void
    {
        $payload = [
            'number1' => 10,
            'number2' => 2,
            'mathType' => 'division',
            'rightOrWrong' => 'wrong',
        ];

        $response = $this->post('/get-solution', $payload);
        $response->assertStatus(302);
        $response->assertRedirect('/?number1=' . $payload['number1'] . '&number2=' . $payload['number2'] . '&math-type=' . $payload['mathType'] . '&solution=5&rightorwrong=wrong');
    }
}
