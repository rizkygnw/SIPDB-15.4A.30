<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\TestCase;
use PHPUnit\Framework\Attributes\Test;

class StudentTest extends TestCase
{
    #[Test]
    public function it_allows_valid_data()
    {
        $data = [
            'user_id' => 4,
            'name' => 'Joan',
            'address' => 'Tanjung Hulu',
            'birth_date' => '2004-09-25',
            'school_origin' => 'High School B',
            'status' => 'active',
        ];
        $this->assertDatabaseHas('students', [
            'user_id' => $data['user_id'],
            'name' => $data['name'],
            'address' => $data['address'],
            'birth_date' => $data['birth_date'],
            'school_origin' => $data['school_origin'],
            'status' => $data['status'],
        ]);
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
            'status' => '',
        ];

        $response = $this->withoutMiddleware()
                     ->postJson('/student', $data);

        $response->assertStatus(422)
                ->assertJsonValidationErrors(['user_id', 'name', 'address', 'birth_date', 'status']);
    }
}
