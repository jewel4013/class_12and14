<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>{{$suser->fname}} {{$suser->lname}} || Profile</title>
</head>
<body>
    <div class="container">
        <h2>Welcome to {{$suser->fname}} {{$suser->lname}} profile</h2>
        <a href="/" class="btn btn-info">Home</a>

        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card" style="width: 90%;">
                    <div class="card-img-top" style="width:100%; height:150px">
                        {{$suser->profile->pic}}
                    </div>
                    <div class="card-body" style="width: 100%">
                        <h3 class="card-title">{{$suser->profile->gender == 'Male' ? 'Mr' : ($suser->profile->gender == 'Female' ? 'Ms' : 'SML')}} {{$suser->fname}} {{$suser->lname}}</h3>
                        <p class="card-text">{{$suser->profile->bio}}</p>
                        <a href="#" class="btn btn-primary">See more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <table class="table">
                    <tr>
                        <th>User Name</th>
                        <td>{{$suser->uname}}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{$suser->profile->address}}</td>
                    </tr>
                    <tr>
                        <th>Email Address</th>
                        <td>{{$suser->email}}</td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <td>{{$suser->phone}}</td>
                    </tr>
                    <tr>
                        <th>Data of Birth</th>
                        <td>{{$suser->profile->date_of_birth}}</td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td>{{$suser->password}}</td>
                    </tr>
                    <tr>
                        <th>Sence from</th>
                        <td>{{$suser->created_at->diffForHumans()}}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{$suser->updated_at->diffForHumans()}}</td>
                    </tr>
                </table>

                <a href="/{{$suser->id}}/user-edit" class="btn btn-success d-inline-block">Edit User</a>
                <a href="/{{$suser->profile->id}}/profile-edit" class="btn btn-success d-inline-block">Edit Profile</a>

                <form action="/{{$suser->id}}/delete" class=" d-inline-block" method="POST">
                    @csrf
                    @method('delete')

                    <button class="btn btn-danger d-inline-block">Delete</button>
                </form>
            </div>
        </div>
    </div>





    
</body>
</html>