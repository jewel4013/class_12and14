<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <title>Morph One to Many All comments</title>
</head>
<body>
    <div class="container">
        <h2>Morph 2 One to many All Comments</h2>
        <h3>All post here</h3>
        <a href="/morph2" class="btn btn-primary">Back</a>

        <table class="table">
            <tr>
                <th>Id</th>
                <th>Comments</th>
                <th>Commntable Type</th>
                <th>Commntable Id</th>
                
            </tr>
            @foreach ($comments as $comment)
                <tr>
                    <td>{{$comment->id}}</td>
                    <td>{{$comment->comment_body}}</td>
                    <td>{{$comment->commentable_type}}</td>
                    <td>
                        <a href="morph2/{{$comment->commentable_type}}/{{$comment->commentable_id}}" class="">{{$comment->commentable_id}}</a>
                    </td>
                
                </tr>
            @endforeach
        </table>

    </div>
</body>
</html>