<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <title>Morph3 MM Single Video Show</title>
</head>
<body>
    <div class="container">
        <h2>M3MM single Video show</h2></h2>
        <a href="/morph3/video" class="btn btn-primary">Back</a>
        <a href="/" class="btn btn-primary">Home</a>

        <div class="card my-3">
            <div class="card-body">
                <span>{{$svideo->created_at}}</span>
                <h2>{{$svideo->caption}}</h2>
                <p class="d-flex justify-content-center">{{$svideo->url}}</p>
                <p class="d-flex justify-content-center">{{$svideo->vpath}}</p>
            </div>


            {{-- comment --}}
            <hr class="m-0">
            <h4 class="mx-4 my-0">Comment</h4>
            <hr class="m-0">

            <ul>
                @foreach ($svideo->comments as $comment)
                    <li>{{$comment->comment}} &nbsp &nbsp &nbsp &nbsp <span class="text-danger">{{$comment->created_at}}</span></li>
                @endforeach
            </ul>



            <form action="/morph3/video/{{$svideo->id}}/comment" class="m-2" method="POST">
                @csrf

                <div class="form-group mt-2">
                    <label for="comment">Write a new comment:</label>
                    <textarea class="form-control {{$errors->has('comment') ? 'is-invalid' : ''}}" name="comment" id="comment" rows="3" cols="5">{{old('comment')}}</textarea>
                    <span class="invalid-feedback">
                        {{$errors->first('comment')}}
                    </span>
                </div>
                
                <button type="submit" class="btn btn-primary mt-3">Submit comment</button>
            </form>
        </div>

        
        

    </div>
</body>
</html>