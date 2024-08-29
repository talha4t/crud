<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
</head>
<body>
    <h1>All Posts</h1>
    <a href="/cruds/create">Create New Post</a>
    @if ($cruds->isEmpty())
        <p>Empty</p>
    @else
        <ul>
            @foreach ($cruds as $crud)
                <li>
                    <strong>{{ $crud->name }}</strong><br>
                    {{ $crud->description }}<br>
                    <a  href="/cruds/{{ $crud->id }}/edit">Edit</a>

                    <form action="/cruds/{{ $crud->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('are you really wanna delete:))?')">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
