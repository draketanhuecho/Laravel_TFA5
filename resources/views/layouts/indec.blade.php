@extends('layouts.app')

@section('content')
    <h1>All Tasks</h1>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Task Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->task_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection