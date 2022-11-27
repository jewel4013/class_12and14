<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <title>{{$svideo->id}} Video</title>
</head>
<body>
    <div class="container">
        <h2>Single video of id = {{$svideo->id}}</h2>
        <a href="/morph2/video" class="btn btn-primary">Back</a>

        <h1>{{$svideo->url}}</h1>
        <h2>{{$svideo->file_path}}</h2>
        <hr>
        <hr>
        <h4>Comments</h4>
        <ul>
            @foreach ($svideo->comments as $comment)
                <li>
                    {{$comment->comment_body}}
                    <a href="#" class="">Edit comment</a>
                </li>
            @endforeach
        </ul>




        <form action="/morph2/video/{{$svideo->id}}/comment" method="POST" class="form">
            @csrf

            <div class="form-group mt-2">
                <textarea class="form-control" name="comment_body" id="comment_body" cols="10" rows="4">{{old('comment_body')}}</textarea>
                <span class="invalid-feedback">
                    {{$errors->first('comment_body')}}
                </span>
            </div>



            <button type="submit" class="btn btn-info mt-3">Submit</button>
        </form>
        

    </div>
</body>
</html>