<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css')}}">

</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4"></div>
            <div class="col-md-4 col-md-offset-4" style="margin-top: 20px;">
                <h4>Login</h4>
                <form action="{{route('user.login')}}" method="post">
                @csrf
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}">
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id= placeholder="enter password" name="password" value="">
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group mt-3">
                      <button class="btn btn-block btn-primary" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>