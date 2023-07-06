<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <h1>Daftar Tugas</h1>

    @foreach ($tasks as $task)
        <div>
            <h3>{{ $task->title }}</h3>
            <p>{{ $task->description }}</p>
            <p>Ditugaskan kepada: {{ $task->user->name }}</p>
        </div>
    @endforeach
@endsection
</body>
</html>