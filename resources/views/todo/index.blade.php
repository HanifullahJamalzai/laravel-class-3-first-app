<h1 style="display: flex; justify-content: space-around">
    <span>
        Todo Page
    </span>
    <a href="{{ route('todo.create') }}" style="background: purple; border: none; padding: 0.3em 0.7em; cursor: pointer; color: white">Add New Todo</a>

</h1>

@if(session('success'))
    <span style="color: green">{{ session('success') }}</span>
@endif

<ul style="display: flex; flex-direction:column; align-items:center; justify-content: center">
    @foreach ($data as $item)
        <div>
            <p>
                <a href="{{ route('todo.show', ['id' => $item->id]) }}">
                    <span style="margin-right: 1.2em;">{{ $item->name }}</span>
                </a>
                
                <form action="{{ route('todo.delete', ['id' => $item->id]) }}" method="post">
                    @csrf
                    @method('delete')

                    <button type="submit" style="background: red; border: none; padding: 0.6em 1em; cursor: pointer; color: white">Delete</button>
                </form>

                <a  href="{{ route('todo.edit', ['id' => $item->id]) }}" style="background: green; border: none; padding: 0.6em 1em; cursor: pointer; color: white; text-decoration: none;">Edit</a>
            </p>
            <hr>
        </div>
    @endforeach
</ul>