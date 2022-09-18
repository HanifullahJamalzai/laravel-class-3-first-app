<h1>Service page</h1>


<a href="/">Root Route</a> <br>
<a href="/about">about</a> <br>
<a href="/home">Home</a> <br>
<a href="/service">Service</a> <br>
<a href="/dashboard">Dashboard</a> <br>


@php
    // var_dump($data);
    // dd($data);

 @endphp 
<ul>
    @foreach ($data as $item)
        <li>
            {{ $item->name }} <br>
        </li>
    @endforeach
</ul>


<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam est, hic velit voluptatum exercitationem id dicta nihil quod eum veritatis aliquam minus minima voluptas ullam illo, laborum autem libero consectetur!
</p>
<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam est, hic velit voluptatum exercitationem id dicta nihil quod eum veritatis aliquam minus minima voluptas ullam illo, laborum autem libero consectetur!
</p>
<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam est, hic velit voluptatum exercitationem id dicta nihil quod eum veritatis aliquam minus minima voluptas ullam illo, laborum autem libero consectetur!
</p>
<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam est, hic velit voluptatum exercitationem id dicta nihil quod eum veritatis aliquam minus minima voluptas ullam illo, laborum autem libero consectetur!
</p>

<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam est, hic velit voluptatum exercitationem id dicta nihil quod eum veritatis aliquam minus minima voluptas ullam illo, laborum autem libero consectetur!
</p>