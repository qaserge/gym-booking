<?php

namespace Tests\Feature;

use App\Models\ClassType;
use App\Models\ScheduledClass;
use App\Models\User;
use Database\Seeders\ClassTypeSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InstructorTest extends TestCase
{
    public function test_instructor_is_redirected_to_instructor_dashboard()
    {
        $user = User::factory()->create([
            'role' => 'instructor'
        ]);

        $response = $this->actingAs($user)->get('/dashboard');

        $response->assertRedirectToRoute('instructor.dashboard');

        $this->followRedirects($response)->assertSeeText("Hey Instructor");
    }

    public function test_instructor_can_schedule_a_class()
    {
        //Given
        $user = User::factory()->create([
            'role' => 'instructor'
        ]);
        $this->seed(ClassTypeSeeder::class);

        //When
        $response = $this->actingAs($user)
            ->post('instructor/schedule', [
                'class_type_id' => ClassType::first()->id,
                'date' => '2023-09-25',
                'time' => '10:00:00'
            ]);

        //Then 
        $response->assertRedirectToRoute('schedule.index');
    }

    public function test_instructor_can_delete_a_class_schedule()
    {
        //Given
        $user = User::factory()->create([
            'role' => 'instructor'
        ]);
        $this->seed(ClassTypeSeeder::class);

        $response = $this->actingAs($user)
            ->post('instructor/schedule', [
                'class_type_id' => ClassType::first()->id,
                'date' => '2023-09-29', // Другая дата
                'time' => '11:00:00'    // Другое время
            ]);

        $schedule = ScheduledClass::latest()->first();

        // When
        $response = $this->actingAs($user)
            ->delete("instructor/schedule/{$schedule->id}");

        // Then
        $response->assertRedirectToRoute('schedule.index');
    }
}
