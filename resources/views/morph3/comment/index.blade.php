<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <title>Morph3 MM Comment Index</title>
</head>
<body>
    <div class="container">
        <h2>M3MM Comment index</h2></h2>
        <a href="/morph3" class="btn btn-primary">Back</a>
        <a href="/" class="btn btn-primary">Home</a>

        <table class="table">
            <tr>
                <th>Id</th>
                <th>Comment</th>
                <th>Post/Video</th>
                <th>Commentable Id</th>
                <th>Action</th>
            </tr>
            @foreach ($comments as $comment)
                <tr>
                    <td>{{$comment->id}}</td>
                    <td>{{$comment->comment}}</td>
                    <td>{{$comment->commentable_type}}</td>
                    <td>{{$comment->commentable_id}}</td>
                    <td>
                        <a href="/morph3/{{$comment->commentable_type}}/{{$comment->commentable_id}}" class="btn btn-info">Shwo post</a>
                    </td>
                </tr>
            @endforeach
        </table>
        
        

    </div>
</body>
</html>