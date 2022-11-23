<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <title>Create a Morph Video</title>
</head>
<body>
    <div class="container">
        <h2>Create Morph One to many Video</h2>
        <a href="/morph2/video" class="btn btn-primary">Back</a>

        <div class="row">
            <div class="col-md-6">
                <form action="/morph2/video/create" method="POST" class="form">
                    @csrf

                    @if(session()->has('wrongs'))
                        <div class="alert alert-danger alert-dismissible fade show mt-2">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong>{{session()->get('wrongs')}}</strong>
                        </div>
                    @endif

                    <div class="form-group mt-2">
                        <label for="url">URL</label>
                        <input type="text" class="form-control {{$errors->has('url') ? 'is-invalid' : ''}}" id="url" name="url" value="{{old('url')}}">
                        <span class="invalid-feedback">
                            {{$errors->first('url')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="file_path">File Path</label>
                        <input type="text" class="form-control {{$errors->has('file_path') ? 'is-invalid' : ''}}" id="file_path" name="file_path" value="{{old('file_path')}}">
                        <span class="invalid-feedback">
                            {{$errors->first('file_path')}}
                        </span>
                    </div>



                    <button type="submit" class="btn btn-info mt-3">Submit</button>
                </form>
            </div>
            <div class="col-md-6"></div>
        </div>

    </div>
</body>
</html>