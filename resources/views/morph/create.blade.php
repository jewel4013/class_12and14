<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <title>Create a Morph User</title>
</head>
<body>
    <div class="container">
        <h2>Create Morph user</h2>
        <a href="/morph" class="btn btn-primary">Back</a>

        <div class="row">
            <div class="col-md-6">
                <form action="/morph/user" method="POST" class="form">
                    @csrf

                    @if(session()->has('wrongs'))
                        <div class="alert alert-danger alert-dismissible fade show mt-2">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <strong>{{session()->get('wrongs')}}</strong>
                        </div>
                    @endif

                    <div class="form-group mt-2">
                        <label for="name">Name</label>
                        <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name" name="name">
                        <span class="invalid-feedback">
                            {{$errors->first('name')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="email">Email</label>
                        <input type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" id="email" name="email">
                        <span class="invalid-feedback">
                            {{$errors->first('email')}}
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