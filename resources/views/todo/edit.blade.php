<h1>Edit Page</h1>



<form action="/todo/store" method="post" style="display: flex; flex-direction:column; align-items:center; justify-content: center">
    @csrf

    <p>Todo input</p>
    <input 
        type="text" 
        name="name" 
        style="margin-bottom: 1em; border: none; border-bottom: 2px solid green; text-indent: 4; font-size: 1em;" 
        placeholder="enter your todo here .."
        value="{{ $todo->name }}"
    >
    <button>Submit</button>
    
</form>