<h1 style="display: flex; justify-content: space-around">
    <span>
        Todo Page
    </span>
</h1>

{{-- <a style="background: purple; border: none; padding: 0.3em 0.7em; cursor: pointer; color: white">Todo</a> --}}
<form action="/todo/store" method="post" style="display: flex; flex-direction:column; align-items:center; justify-content: center">
    @csrf

    <p>Todo input</p>
    <input 
        type="text" 
        name="name" 
        style="margin-bottom: 1em; border: none; border-bottom: 2px solid green; text-indent: 4; font-size: 1em;" 
        placeholder="enter your todo here .."
        value="{{ old('name') }}"
    >
    @error('name')
        <span style="color: red">{{ $message }}</span>
    @enderror

    <button>Submit</button>
    
</form>
