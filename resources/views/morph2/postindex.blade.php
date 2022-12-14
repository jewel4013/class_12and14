<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <title>Morph One to Many Post</title>
</head>
<body>
    <div class="container">
        <h2>Morph 2 One to many Post</h2>
        <h3>All post here</h3>
        <a href="/morph2/post/create" class="btn btn-primary">Create a new Post</a>

        <table class="table">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>
                        <a href="/morph2/post/{{$post->id}}" class="btn btn-info">Show</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
</body>
</html>