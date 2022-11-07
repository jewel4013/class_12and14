<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Send a mail</title>
</head>
<body>
    <div class="container">
        <h1>Create a new user</h1>
        <a href="/" class="btn btn-info">Home</a>


        <form action="/sendmail" class="" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mt-2">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control {{($errors->has('email')) ? 'is-invalid' : '' }}" name="email" id="email" value="{{old('email')}}">
                        <span class="invalid-feedback">
                            {{$errors->first('email')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="sub">Subject</label>
                        <input type="sub" class="form-control {{($errors->has('sub')) ? 'is-invalid' : '' }}" name="sub" id="sub" value="{{old('sub')}}">
                        <span class="invalid-feedback">
                            {{$errors->first('sub')}}
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <label for="message">Mail</label>
                        <textarea 
                        class="form-control {{($errors->has('message')) ? 'is-invalid' : '' }}" 
                        name="message" 
                        id="message" 
                        value="{{old('message')}}"
                        cols="10"
                        rows="10"></textarea>
                        <span class="invalid-feedback">
                            {{$errors->first('message')}}
                        </span>
                    </div>
                    
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
</body>
</html>