<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Multiple File Upload</title>
</head>
<body>
    <div class="container">
        <h1>Upload one or more files.
        <a href="/" class="btn btn-info">Home</a></h1>

       

        <form action="/ultifileup" class="form mt-5" method="POST" enctype="multipart/form-data">
            @csrf

            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>{{session()->get('success')}}</strong>
                </div>
            @endif
            
            @if ($errors->any('propic'))
                <div class="alert alert-danger alert-dismissible fade show mt-2">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li>{{$item}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mt-2">
                        <label for="propic">Profile Picture</label>
                        <input type="file" class="form-control" name="propic[]" id="propic"multiple>
                            
                    </div>
                </div>
               


            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
</body>
</html>