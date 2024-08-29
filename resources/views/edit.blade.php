<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Posts</title>
</head>
<body>
    <h1>Edit Posts</h1>
    <form action="/cruds/{{ $crud->id }}" method="post">
        @csrf
        @method('patch')
        <input
            type="text"
            name="name"
            id="name"
            value="{{ $crud['name'] }}"
            required
        />
        <input
            type="text"
            name="description"
            id="description"
            value="{{ $crud['description'] }}"
            required
        />
        <button type="submit">
            Update
        </button>

    </form>
</body>
</html>
