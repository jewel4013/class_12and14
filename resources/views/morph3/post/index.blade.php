<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <title>Morph3 MM Post</title>
</head>
<body>
    <div class="container">
        <h2>Morph 3 Many to Many relation (Class: 18-19)</h2>
        <a href="/morph3" class="btn btn-primary">Back</a>
        <a href="/" class="btn btn-primary">Home</a>
        <a href="/morph3/post/create" class="btn btn-primary">Create a new post</a>

        
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Caption</th>
                <th>Post Body</th>
                <th>Action</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->caption}}</td>
                    <td>{{$post->pbody}}</td>
                    <td>
                        <a href="/morph3/post/{{$post->id}}" class="btn btn-info">Show</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
</body>
</html>