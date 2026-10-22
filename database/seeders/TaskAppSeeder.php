<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Task;
use Carbon\Carbon;

class TaskAppSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username'  => 'johndoe',
            'full_name' => 'John Doe',
            'email'     => 'johndoe@example.com',
        ]);

        $today = Carbon::today()->toDateString();
        $yesterday = Carbon::yesterday()->toDateString();
        $tomorrow = Carbon::tomorrow()->toDateString();

        $tasks = [
            ['title' => 'Review Web Systems Lecture', 'status' => 'completed', 'task_date' => $yesterday],
            ['title' => 'Submit TSA1 Revision', 'status' => 'completed', 'task_date' => $yesterday],
            ['title' => 'Complete Laravel Migration Lab', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Configure Eloquent Models', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Build Blade Views', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Prepare Project Documentation', 'status' => 'pending', 'task_date' => $tomorrow],
            ['title' => 'Deploy Application to Render', 'status' => 'pending', 'task_date' => $tomorrow],
            ['title' => 'Submit Repository Link', 'status' => 'pending', 'task_date' => $tomorrow],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}