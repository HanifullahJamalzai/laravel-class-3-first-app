<h1>show page</h1>
{{-- 
@php
    dd($todo)
@endphp --}}

<hr>

<p>{{ $todo->id }} - {{ $todo->name }} - {{ $todo->created_at }}</p>