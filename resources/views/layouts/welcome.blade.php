@extends('layouts.app')

@section('content')
    <h1>Tasks for Today</h1>
    @if($todayTasks->isEmpty())
        <p>No tasks scheduled for today.</p>
    @else
        <ul>
            @foreach($todayTasks as $task)
                <li><strong>{{ $task->title }}</strong> - Status: {{ $task->status }}</li>
            @endforeach
        </ul>
    @endif
@endsection