<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <title>Morph3 MM Tags Index</title>
</head>
<body>
    <div class="container">
        <h2>Morph 3 Many to Many relation Tags (Class: 18-19)</h2>
        <a href="/morph3" class="btn btn-primary">Back</a>
        <a href="/" class="btn btn-primary">Home</a>
        <a href="/morph3/tag/create" class="btn btn-primary">Create a new tag</a>

        @if (session('success'))    
            <div class="alert alert-success alert-dismissible mt-3">
                <a href="#" class="btn-close" data-bs-dismiss="alert"></a>
                <strong>{{session('success')}}</strong>
            </div>
        @endif

        <table class="table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
            @foreach ($tags as $tag)
                <tr>
                    <td>{{$tag->id}}</td>
                    <td><a href="/morph3/tag/{{$tag->name}}" class="">{{$tag->name}}</a></td>
                    <td>{{$tag->description}}</td>
                </tr>
            @endforeach
        </table>

    </div>
</body>
</html>