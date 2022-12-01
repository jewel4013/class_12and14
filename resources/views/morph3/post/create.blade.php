<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <title>Morph3 MM Create a new post</title>
</head>
<body>
    <div class="container">
        <h2>Morph3 MM Create a new post</h2>
        <a href="/morph3/post" class="btn btn-primary">Back</a>
        <a href="/" class="btn btn-primary">Home</a>
        
        
        <form action="{{route('post.index')}}" class="form" method="POST">
            @csrf

            <div class="form-group mt-2">
                <label for="caption">Caption</label>
                <input type="text" class="form-control {{$errors->has('caption') ? 'is-invalid' : ''}}" name="caption" id="caption" value="{{old('caption')}}">
                <span class="invalid-feedback">
                    {{$errors->first('caption')}}
                </span>
            </div>
            <div class="form-group mt-2">
                <label for="pbody">Bost body</label>
                <textarea class="form-control {{$errors->has('pbody') ? 'is-invalid' : ''}}" name="pbody" id="pbody" rows="5" cols="5">{{old('pbody')}}</textarea>
                <span class="invalid-feedback">
                    {{$errors->first('pbody')}}
                </span>
            </div>
            <div class="form-group mt-2">
                <label for="pbody">Tags</label>
                <select name="tag[]" id="tag" class="form-control {{$errors->has('tag') ? 'is-invalid' : ''}}" multiple>
                    @foreach ($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                </select>
                <span class="invalid-feedback">
                    {{$errors->first('tag')}}
                </span>
            </div>
            



            <button class="btn btn-success my-2" type="submit">Submit</button>
        </form>

    </div>
</body>
</html>