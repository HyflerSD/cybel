<?php

namespace Tests\Feature;

//use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class DepartmentControllerTest extends TestCase
{
//    use RefreshDatabase;

    /** @test */
    public function a_department_can_be_added()
    {
        $this->withoutExceptionHandling();

        // Assuming you have authentication and a user needs to be authenticated to create a department
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->post('/departments', [
            'DepartmentName' => 'New Department2',
        ]);

        $response->assertOk();

        $this->assertCount(1, Department::all()); // Check if a department was added
        $this->assertDatabaseHas('Departments', ['DepartmentName' => 'New Department2']); // Check the database
    }
}
