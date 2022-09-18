<h1>I am Home View</h1>

<a href="/">Root Route</a> <br>
<a href="/about">about</a> <br>
<a href="/home">Home</a> <br>
<a href="/service">Service</a> <br>
<a href="/dashboard">Dashboard</a> <br>

@php
    
    // dd($data)

@endphp

@foreach ($data as $item )
    <h2>{{ $item->text }}</h2>
@endforeach