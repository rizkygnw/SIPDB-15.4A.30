<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase;
use PHPUnit\Framework\Attributes\Test;

class StudentTest extends TestCase
{
    #[Test]
    public function it_allows_valid_data()
    {
        $data = [
            'user_id' => 5,
            'name' => 'Roy',
            'address' => 'Tanjung Hulu',
            'birth_date' => '2003-01-12',
            'school_origin' => 'High School A',
            'status' => 'active',
        ];

        $response = $this->postJson('/student', $data);

        $response->assertStatus(201);
                //  ->assertJson($data);
    }

    #[Test]
    public function it_rejects_invalid_data()
    {
        $data = [
            'user_id' => null,
            'name' => '',
            'address' => '',
            'birth_date' => 'invalid-date',
            'school_origin' => '',
            'status' => 'invalid-status',
        ];

        $response = $this->postJson('/student', $data);

        $response->assertStatus(422)
                ->assertJsonValidationErrors(['user_id', 'name', 'address', 'birth_date', 'status']);
    }
}
