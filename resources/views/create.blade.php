<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>
    <h1>Create a New Post</h1>
    <form action="/cruds" method="post">
        @csrf
        
        <input
            type="text"
            name="name"
            id="name"
            placeholder="enter name"
            required
        />
        <input
            type="text"
            name="description"
            id="description"
            placeholder="enter content"
            required
        />
        <button type="submit">
            Save
        </button>
    </form>
</body>
</html>
