<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <title>Morph One to Many Video</title>
</head>
<body>
    <div class="container">
        <h2>Morph 2 One to many Video Index</h2>
        <h3>All Video here</h3>
        <a href="/morph2/video/create" class="btn btn-primary">Create a new Video</a>


        <table class="table">
            <tr>
                <th>Id</th>
                <th>URL</th>
                <th>File Path</th>
                <th>Action</th>
            </tr>
            @foreach ($videos as $video)
                <tr>
                    <td>{{$video->id}}</td>
                    <td>{{$video->url}}</td>
                    <td>{{$video->file_path}}</td>
                    <td>
                        <a href="/morph2/video/{{$video->id}}" class="btn btn-info">Show</a>
                    </td>
                </tr> 
            @endforeach
        </table>

    </div>
</body>
</html>