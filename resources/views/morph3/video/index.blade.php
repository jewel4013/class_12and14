<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <title>Morph3 MM Video</title>
</head>
<body>
    <div class="container">
        <h2>Morph3  Many to Many relation Video (Class: 18-19)</h2>
        <a href="/morph3" class="btn btn-primary">Back</a>
        <a href="/" class="btn btn-primary">Home</a>
        <a href="/morph3/video/create" class="btn btn-primary">Create a new Video</a>

        
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Caption</th>
                <th>Video Url</th>
                <th>Video Path</th>
                <th>Action</th>
            </tr>
            @foreach ($videos as $video)
                <tr>
                    <td>{{$video->id}}</td>
                    <td>{{$video->caption}}</td>
                    <td>{{$video->url}}</td>
                    <td>{{$video->vpath}}</td>
                    <td>
                        <a href="/morph3/video/{{$video->id}}" class="btn btn-info">Show</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
</body>
</html>