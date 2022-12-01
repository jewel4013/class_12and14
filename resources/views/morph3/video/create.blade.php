<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <title>Morph3 MM Create a new video</title>
</head>
<body>
    <div class="container">
        <h2>Morph3 MM Create a new video</h2>
        <a href="/morph3/video" class="btn btn-primary">Back</a>
        <a href="/" class="btn btn-primary">Home</a>
        
        
        <form action="{{route('video.index')}}" class="form" method="POST">
            @csrf

            <div class="form-group mt-2">
                <label for="caption">Caption</label>
                <input type="text" class="form-control {{$errors->has('caption') ? 'is-invalid' : ''}}" name="caption" id="caption" value="{{old('caption')}}">
                <span class="invalid-feedback">
                    {{$errors->first('caption')}}
                </span>
            </div>
            <div class="form-group mt-2">
                <label for="url">Video Url</label>
                <input type="text" class="form-control {{$errors->has('url') ? 'is-invalid' : ''}}" name="url" id="url" vlaue="{{old('url')}}">
                <span class="invalid-feedback">
                    {{$errors->first('url')}}
                </span>
            </div>
            <div class="form-group mt-2">
                <label for="vpath">Video Path</label>
                <input type="text" class="form-control {{$errors->has('vpath') ? 'is-invalid' : ''}}" name="vpath" id="vpath" vlaue="{{old('vpath')}}">
                <span class="invalid-feedback">
                    {{$errors->first('vpath')}}
                </span>
            </div>
            



            <button class="btn btn-success my-2" type="submit">Submit</button>
        </form>

    </div>
</body>
</html>