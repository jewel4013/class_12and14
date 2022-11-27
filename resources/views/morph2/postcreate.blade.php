<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <title>Create a Morph Post</title>
</head>
<body>
    <div class="container">
        <h2>Create Morph One to many Post</h2>
        <a href="/morph2/post" class="btn btn-primary">Back</a>

        <div class="row">
            <div class="col-md-6">
                <form action="/morph2/post/create" method="POST" class="form">
                    @csrf

                    <div class="form-group mt-2">
                        <label for="title">Post Title</label>
                        <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" id="title" name="title">
                        <span class="invalid-feedback">
                            {{$errors->first('title')}}
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