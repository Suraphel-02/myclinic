<?php

namespace Tests\Feature;

use App\Models\Patient;
use Tests\TestCase;
use function Pest\Laravel\get;
use function Pest\Laravel\post;
use function Pest\Laravel\put;
use function Pest\Laravel\delete;

it('can create a patient', function () {
    $patientData = [
        'name' => 'John Doe',
        'email' => 'john.doe@example.com',
        'phone' => '123-456-7890',
    ];

    post('/api/patients', $patientData)
        ->assertStatus(201) // Assuming a successful creation returns 201 Created
        ->assertJson($patientData);

    $this->assertDatabaseHas('patients', $patientData);
});

it('can retrieve a patient', function () {
    $patient = Patient::factory()->create();

    get('/api/patients/' . $patient->id)
        ->assertStatus(200)
        ->assertJson($patient->toArray());
});

it('can update a patient', function () {
    $patient = Patient::factory()->create();

    $updatedData = [
        'name' => 'Jane Doe',
        'email' => 'jane.doe@example.com',
        'phone' => '098-765-4321',
    ];

    put('/api/patients/' . $patient->id, $updatedData)
        ->assertStatus(200)
        ->assertJson($updatedData);

    $this->assertDatabaseHas('patients', array_merge(['id' => $patient->id], $updatedData));
});

it('can delete a patient', function () {
    $patient = Patient::factory()->create();

    delete('/api/patients/' . $patient->id)
        ->assertStatus(204); // Assuming a successful deletion returns 204 No Content

    $this->assertDatabaseMissing('patients', ['id' => $patient->id]);
});