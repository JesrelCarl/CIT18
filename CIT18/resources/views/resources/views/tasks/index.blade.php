@extends('layouts.app')

@section('content')
    <h1>Task List</h1>
    <a href="{{ route('tasks.create') }}">Create New Task</a>
    <ul>
    @vite('resources/css/app.css')
        @foreach ($tasks as $task)
            <li>
                {{ $task->title }} - {{ $task->is_completed ? 'Completed' : 'Pending' }}
                <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
</ul>
@endsection
