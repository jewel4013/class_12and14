<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <title>Morph3 MM Tag show</title>
</head>
<body>
    <div class="container">
        <h2>M3MM single Tag</h2></h2>
        <a href="/morph3/tag" class="btn btn-primary">Back</a>
        <a href="/" class="btn btn-primary">Home</a>

        <div class="card my-3">
            <div class="card-body">
                <span>{{$tags->created_at}}</span>
                <h2>{{$tags->name}}</h2>
                <p class="">{{$tags->description}}</p>
            </div>
        </div>

        {{-- General Post --}}
        <h2>Post List</h2>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Caption</th>
                <th>Post Body</th>
                <th>Created At</th>
            </tr>
            @foreach ($tags->posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->caption}}</td>
                    <td>{{$post->pbody}}</td>
                    <td>{{$post->created_at->tz('6.00')}}</td>
                </tr>
            @endforeach
        </table>



        {{-- Video Post --}}
        <h2>Video List</h2>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Caption</th>
                <th>Video URL</th>
                <th>Video Path</th>
                <th>Created At</th>
            </tr>
            @foreach ($tags->videos as $video)
                <tr>
                    <td>{{$video->id}}</td>
                    <td>{{$video->caption}}</td>
                    <td>{{$video->url}}</td>
                    <td>{{$video->vpath}}</td>
                    <td>{{$video->created_at->tz('6.00')}}</td>
                </tr>
            @endforeach
        </table>


    </div>
</body>
</html>