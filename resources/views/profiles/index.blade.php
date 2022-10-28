<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>All Profile</title>
</head>
<body>
    <div class="container">
        <h1>All profile here</h1>
        <a href="/" class="btn btn-info">Home</a>

        <table class="table">
            <tr>
                <th>Id</th>
                <th>Address</th>
                <th>Photo</th>
                <th>Biography</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>User Name</th>
            </tr>
            @foreach ($profiles as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->pic}}</td>
                    <td>{{$item->bio}}</td>
                    <td>{{$item->date_of_birth}}</td>
                    <td>{{$item->gender}}</td>
                    <td><a href="/{{$item->owner->id}}" class="">{{$item->owner->fname}}</a></td>
                </tr>
            @endforeach
        </table>
    </div>


    
</body>
</html>