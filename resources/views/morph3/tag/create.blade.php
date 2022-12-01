<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <title>Morph3 MM Create a new Tag</title>
</head>
<body>
    <div class="container">
        <h2>Morph3 MM Create a new tag</h2>
        <a href="/morph3/tag" class="btn btn-primary">Back</a>
        <a href="/" class="btn btn-primary">Home</a>
        
        
        <form action="{{route('tag.index')}}" class="form" method="POST">
            @csrf

            <div class="form-group mt-2">
                <label for="name">Tag Name</label>
                <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" name="name" id="name" value="{{old('name')}}">
                <span class="invalid-feedback">
                    {{$errors->first('name')}}
                </span>
            </div>
            <div class="form-group mt-2">
                <label for="description">Description</label>
                <input type="text" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}" name="description" id="description" value="{{old('description')}}">
                <span class="invalid-feedback">
                    {{$errors->first('description')}}
                </span>
            </div>
            



            <button class="btn btn-success my-2" type="submit">Submit</button>
        </form>

    </div>
</body>
</html>