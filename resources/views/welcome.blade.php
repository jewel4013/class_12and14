<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>One to one relation Class 12 And 14</title>
</head>
<body>
    <div class="container">
        <h1>One To One relation. Class 12 and 14-15</h1>
        <a href="/user-create" class="btn btn-info">Create a new user</a>
        <a href="/profile" class="btn btn-info">See Profile</a>
        <a href="/sendmail" class="btn btn-info">Send Mail</a>
        <a href="/fileup" class="btn btn-info">Upload a file</a>
        <a href="{{url('/ultifileup')}}" class="btn btn-info">Multiple file Upload</a>
        <a href="{{url('/morph')}}" class="btn btn-info">Morph One To One</a>

        <table class="table">
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>User Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
                <th>Password</th>
                <th>Profile</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->fname}}</td>
                    <td>{{$user->lname}}</td>
                    <td>{{$user->uname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->password}}</td>
                    <td><a href="/{{$user->id}}" class="">Details</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>