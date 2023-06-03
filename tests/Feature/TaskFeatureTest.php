<?php

namespace Tests\Feature;

use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class TaskFeatureTest extends TestCase
{
    use RefreshDatabase;

    // Testa criacao de uma tarefa.

    //@return void

    public function testCreateTask()
    {
        $response = $this->post('/tasks', [
            'title' => 'Nova Tarefa', // Nova tarefa e o valor que sera salvo no banco de dados
        ]);

        $response->assertStatus(302); // Verifica se foi redirecionado
        $response->assertRedirect('/tasks'); // Verifica se redirecionou para a pagina correta

        $this->assertDatabaseHas('tasks', [
            'title' => 'Nova Tarefa',
        ]); // Verifica se a tarefa foi salva no bando de dados
    }

    public function testDeleteTask()
    {
        $task = Task::factory()->create();

        $response = $this->delete("/tasks/{$task->id}");

        $response->assertStatus(302);
        $response->assertRedirect('/tasks');

        $this->assertDatabaseMissing('tasks', [
            'id' => $task->id,
        ]);
    }
}
