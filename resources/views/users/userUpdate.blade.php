<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Update user</title>
</head>
<body>
    <div class="container">
        <h1>{{$suser->fname}} update your user information</h1>
        <a href="/{{$suser->id}}" class="btn btn-info">Back</a>


        <form action="/{{$suser->id}}/user-edit" class="" method="POST">
            @csrf
            @method('patch')

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mt-2">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control {{($errors->has('fname')) ? 'is-invalid' : '' }}" name="fname" id="fname" value="{{$suser->fname}}">
                        <span class="invalid-feedback">
                            {{$errors->first('fname')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control {{($errors->has('lname')) ? 'is-invalid' : '' }}" name="lname" id="lname" value="{{$suser->lname}}">
                        <span class="invalid-feedback">
                            {{$errors->first('lname')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="uname">User Name</label>
                        <input type="text" class="form-control {{($errors->has('uname')) ? 'is-invalid' : '' }}" name="uname" id="uname" value="{{$suser->uname}}">
                        <span class="invalid-feedback">
                            {{$errors->first('uname')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control {{($errors->has('email')) ? 'is-invalid' : '' }}" name="email" id="email" value="{{$suser->email}}">
                        <span class="invalid-feedback">
                            {{$errors->first('email')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control {{($errors->has('phone')) ? 'is-invalid' : '' }}" name="phone" id="phone" value="{{$suser->phone}}">
                        <span class="invalid-feedback">
                            {{$errors->first('phone')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="password">Password</label>
                        <input type="password" class="form-control {{($errors->has('password')) ? 'is-invalid' : '' }}" name="password" id="password" value="{{$suser->password}}">
                        <span class="invalid-feedback">
                            {{$errors->first('password')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control {{($errors->has('password_confirmation')) ? 'is-invalid' : '' }}" name="password_confirmation" id="password_confirmation" value="{{$suser->password}}">
                        <span class="invalid-feedback">
                            {{$errors->first('password_confirmation')}}
                        </span>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
</body>
</html>