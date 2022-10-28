<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Create a new user</title>
</head>
<body>
    <div class="container">
        <h1>Create a new user</h1>
        <a href="/" class="btn btn-info">Home</a>


        <form action="/user-create" class="" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mt-2">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control {{($errors->has('fname')) ? 'is-invalid' : '' }}" name="fname" id="fname" value="{{old('fname')}}">
                        <span class="invalid-feedback">
                            {{$errors->first('fname')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control {{($errors->has('lname')) ? 'is-invalid' : '' }}" name="lname" id="lname" value="{{old('lname')}}">
                        <span class="invalid-feedback">
                            {{$errors->first('lname')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="uname">User Name</label>
                        <input type="text" class="form-control {{($errors->has('uname')) ? 'is-invalid' : '' }}" name="uname" id="uname" value="{{old('uname')}}">
                        <span class="invalid-feedback">
                            {{$errors->first('uname')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control {{($errors->has('email')) ? 'is-invalid' : '' }}" name="email" id="email" value="{{old('email')}}">
                        <span class="invalid-feedback">
                            {{$errors->first('email')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control {{($errors->has('phone')) ? 'is-invalid' : '' }}" name="phone" id="phone" value="{{old('phone')}}">
                        <span class="invalid-feedback">
                            {{$errors->first('phone')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="password">Password</label>
                        <input type="password" class="form-control {{($errors->has('password')) ? 'is-invalid' : '' }}" name="password" id="password" value="{{old('password')}}">
                        <span class="invalid-feedback">
                            {{$errors->first('password')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control {{($errors->has('password_confirmation')) ? 'is-invalid' : '' }}" name="password_confirmation" id="password_confirmation" value="{{old('password_confirmation')}}">
                        <span class="invalid-feedback">
                            {{$errors->first('password_confirmation')}}
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mt-2">
                        <label for="address">Address</label>
                        <input type="text" class="form-control {{($errors->has('address')) ? 'is-invalid' : '' }}" name="address" id="address" value="{{old('address')}}">
                        <span class="invalid-feedback">
                            {{$errors->first('address')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="pic">Photo</label>
                        <input type="text" class="form-control {{($errors->has('pic')) ? 'is-invalid' : '' }}" name="pic" id="pic" value="{{old('pic')}}">
                        <span class="invalid-feedback">
                            {{$errors->first('pic')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="bio">Biography</label>
                        <textarea class="form-control {{($errors->has('bio')) ? 'is-invalid' : '' }}" name="bio" id="bio" rows="4" cols="5">{{old('bio')}}</textarea>
                        <span class="invalid-feedback">
                            {{$errors->first('bio')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="date_of_birth">Date of Birth</label>
                        <input type="date" class="form-control {{($errors->has('date_of_birth')) ? 'is-invalid' : '' }}" name="date_of_birth" id="date_of_birth" value="{{old('date_of_birth')}}">
                        <span class="invalid-feedback">
                            {{$errors->first('date_of_birth')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <p class="mb-1">Gender</p>
                        <div class="form-check d-inline-block">
                            <input type="radio" class="form-check-input {{($errors->has('gender')) ? 'is-invalid' : '' }}" name="gender" id="male" value="Male" {{(old('gender') == 'Male') ? 'checked' : ''}}>
                            <label for="male">Male</label>
                        </div>
                        <div class="form-check d-inline-block m-3 my-0">
                            <input type="radio" class="form-check-input {{($errors->has('gender')) ? 'is-invalid' : '' }}" name="gender" id="female" value="Female" {{(old('gender') == 'Female') ? 'checked' : ''}}>
                            <label for="female">Female</label>
                        </div>
                        <div class="form-check d-inline-block m-3 my-0">
                            <input type="radio" class="form-check-input {{($errors->has('gender')) ? 'is-invalid' : '' }}" name="gender" id="others" value="Others" {{(old('gender') == 'Others') ? 'checked' : ''}}>
                            <label for="others">Others</label>
                        </div>
                        @if ($errors->has('gender'))
                            <span class="invalid-feedback d-block">
                                {{$errors->first('gender')}}
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
</body>
</html>