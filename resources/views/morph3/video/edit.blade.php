<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <title>Morph3 MM Edit your video</title>
</head>
<body>
    <div class="container">
        <h2>Morph3 MM Edit your video</h2>
        <a href="/morph3/video/{{$svideo->id}}" class="btn btn-primary">Back</a>
        <a href="/" class="btn btn-primary">Home</a>
        
        {{-- @if (session('wrong'))    
            <div class="alert alert-success alert-dismissible mt-3">
                <a href="#" class="btn-close" data-bs-dismiss="alert"></a>
                <strong>{{session('wrong')}}</strong>
            </div>
        @endif --}}

        @if(session()->has('wrong'))
            <div class="alert alert-danger alert-dismissible fade show mt-2">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>{{session()->get('wrong')}}</strong>
            </div>
        @endif



        <form action="/morph3/video/{{$svideo->id}}" class="form" method="POST">
            @csrf
            @method('patch')

            <div class="form-group mt-2">
                <label for="caption">Caption</label>
                <input type="text" class="form-control {{$errors->has('caption') ? 'is-invalid' : ''}}" name="caption" id="caption" value="{{old('caption') ? old('caption') : $svideo->caption}}">
                <span class="invalid-feedback">
                    {{$errors->first('caption')}}
                </span>
            </div>
            <div class="form-group mt-2">
                <label for="url">Video Url</label>
                <input type="text" class="form-control {{$errors->has('url') ? 'is-invalid' : ''}}" name="url" id="url" value="{{old('url') ? old('url') : $svideo->url}}">
                <span class="invalid-feedback">
                    {{$errors->first('url')}}
                </span>
            </div>
            <div class="form-group mt-2">
                <label for="vpath">Video Path</label>
                <input type="text" class="form-control {{$errors->has('vpath') ? 'is-invalid' : ''}}" name="vpath" id="vpath" value="{{old('vpath') ? old('vpath') : $svideo->vpath}}">
                <span class="invalid-feedback">
                    {{$errors->first('vpath')}}
                </span>
            </div>
            <div class="form-group mt-2">
                <label for="tag">Video Path</label>
                <select name="tag[]" id="tag" class="form-control {{$errors->has('tag') ? 'is-invalid' : ''}}" multiple>
                    @foreach ($tags as $tag)
                        <option value="{{$tag->id}}" {{$vtag->contains($tag->id) ? 'selected' : ''}}>{{$tag->name}}</option>
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