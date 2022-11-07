<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Multiple File Upload</title>
</head>
<body>
    <div class="container">
        <h1>Upload one or more files.
        <a href="/" class="btn btn-info">Home</a></h1>


        <form action="/ultifileup" class="mt-5" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mt-2">
                        <label for="propic">Profile Picture</label>
                        <input type="file" class="form-control {{($errors->has('propic')) ? 'is-invalid' : '' }}" name="propic[]" id="propic" value="" multiple>
                        <span class="invalid-feedback">
                            {{$errors->first('propic')}}
                        </span>
                        @if(session()->has('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                <span>{{session()->get('success')}}</span>
                            </div>
                        @endif
                    </div>
                </div>
               


            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
</body>
</html>