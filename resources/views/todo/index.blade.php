<h1 style="display: flex; justify-content: space-around">
    <span>
        Todo Page
    </span>
    <a href="/todo/create" style="background: purple; border: none; padding: 0.3em 0.7em; cursor: pointer; color: white">Add New Todo</a>

</h1>


<ul style="display: flex; flex-direction:column; align-items:center; justify-content: center">
    @foreach ($data as $item)
        <div>
            <p>
                <span style="margin-right: 1.2em;">{{ $item->name }}</span>
                
                <form action="/todo/delete/{{ $item->id }}" method="post">
                    @csrf
                    @method('delete')

                    <button type="submit" style="background: red; border: none; padding: 0.6em 1em; cursor: pointer; color: white">Delete</button>
                </form>

                <button style="background: green; border: none; padding: 0.6em 1em; cursor: pointer; color: white">Edit</button>
            </p>
            <hr>
        </div>
    @endforeach
</ul>