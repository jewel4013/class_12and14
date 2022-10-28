<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Update profile</title>
</head>
<body>
    <div class="container">
        <h1>Create a new user</h1>
        <a href="/{{$suser->owner->id}}" class="btn btn-info">Back</a>


        <form action="/{{$suser->id}}/profile-edit" class="" method="POST">
            @csrf
            @method('patch')

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mt-2">
                        <label for="address">Address</label>
                        <input type="text" class="form-control {{($errors->has('address')) ? 'is-invalid' : '' }}" name="address" id="address" value="{{$suser->address}}">
                        <span class="invalid-feedback">
                            {{$errors->first('address')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="pic">Photo</label>
                        <input type="text" class="form-control {{($errors->has('pic')) ? 'is-invalid' : '' }}" name="pic" id="pic" value="{{$suser->pic}}">
                        <span class="invalid-feedback">
                            {{$errors->first('pic')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="bio">Biography</label>
                        <textarea class="form-control {{($errors->has('bio')) ? 'is-invalid' : '' }}" name="bio" id="bio" rows="4" cols="5">{{$suser->bio}}</textarea>
                        <span class="invalid-feedback">
                            {{$errors->first('bio')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="date_of_birth">Date of Birth</label> {{$suser->date_of_birth}}
                        <input type="date" class="form-control {{($errors->has('date_of_birth')) ? 'is-invalid' : '' }}" name="date_of_birth" id="date_of_birth" value="{{old('date_of_birth')}}">
                        <span class="invalid-feedback">
                            {{$errors->first('date_of_birth')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <p class="mb-1">Gender</p>
                        <div class="form-check d-inline-block">
                            <input type="radio" class="form-check-input {{($errors->has('gender')) ? 'is-invalid' : '' }}" name="gender" id="male" value="Male" {{($suser->gender == 'Male') ? 'checked' : ''}}>
                            <label for="male">Male</label>
                        </div>
                        <div class="form-check d-inline-block m-3 my-0">
                            <input type="radio" class="form-check-input {{($errors->has('gender')) ? 'is-invalid' : '' }}" name="gender" id="female" value="Female" {{($suser->gender == 'Female') ? 'checked' : ''}}>
                            <label for="female">Female</label>
                        </div>
                        <div class="form-check d-inline-block m-3 my-0">
                            <input type="radio" class="form-check-input {{($errors->has('gender')) ? 'is-invalid' : '' }}" name="gender" id="others" value="Others" {{($suser->gender == 'Others') ? 'checked' : ''}}>
                            <label for="others">Others</label>
                        </div>
                        @if ($errors->has('gender'))
                            <span class="invalid-feedback d-block">
                                {{$errors->first('gender')}}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
</body>
</html>