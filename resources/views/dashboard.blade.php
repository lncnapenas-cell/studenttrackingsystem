@extends('layouts.app')

@section('content')
<div class="text-center mt-5">
    <h1 class="mb-4">📚 Student-Section System</h1>
    <p class="lead mb-5">Welcome! Please choose what you want to manage:</p>

    <div class="d-flex justify-content-center gap-4">
        <a href="{{ route('students.index') }}" class="btn btn-success btn-lg px-5">
            👨‍🎓 Students
        </a>
        <a href="{{ route('sections.index') }}" class="btn btn-primary btn-lg px-5">
            🏫 Sections
        </a>
    </div>
</div>
@endsection
