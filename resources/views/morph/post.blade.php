<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <title>Morph Post</title>
</head>
<body>
    <div class="container">
        <h2>Morph Post</h2>
        <a href="/morph" class="btn btn-primary">Back</a>

        <div class="row">
            <div class="col-md-6">
                <form action="/morph/post" method="POST" class="form">
                    @csrf

                    @if(session()->has('wrongs'))
                        <div class="alert alert-danger alert-dismissible fade show mt-2">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong>{{session()->get('wrongs')}}</strong>
                        </div>
                    @endif

                    <div class="form-group mt-2">
                        <label for="title">Post Title</label>
                        <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" id="title" name="title">
                        <span class="invalid-feedback">
                            {{$errors->first('title')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="path">Path</label>
                        <input type="text" class="form-control {{$errors->has('path') ? 'is-invalid' : ''}}" id="path" name="path">
                        <span class="invalid-feedback">
                            {{$errors->first('path')}}
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