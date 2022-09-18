<h1>about page</h1>



<a href="/">Root Route</a> <br>
<a href="/about">about</a> <br>
<a href="/home">Home</a> <br>
<a href="/service">Service</a> <br>
<a href="/dashboard">Dashboard</a> <br>
<a href="/todo">Todo</a> <br>


<br>
<br>
<br>
<br>
<br>

@foreach ($data as $item )
    {{ $item }}
    <br>
@endforeach