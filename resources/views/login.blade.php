<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<br><br><br>

<div id="login-row" class="row justify-content-center align-items-center">
<div id="login-column" class="column justify-content-center align-items-center col-md-3">
<div id="login-box" class="col-md-12">
<form id="login-form" class="form" action="{{route('auth.check')}}" method="post">
@if(Session::get('fail'))
               <div class="alert alert-danger">
                  {{ Session::get('fail') }}
               </div>
            @endif
@csrf
                            <h3 class="text-center text-info">MyStudent</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" class="form-control" value="{{old('username')}}" >
                                <span class="text-danger">@error('username'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" class="form-control" >
                                <span class="text-danger">@error('password'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                            <button type="submit" name="Login" class="btn btn-info btn-md">Login</button>                
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="{{route('auth.r')}}" class="text-info">Register here</a>
                            </div>
                        </form>
</div>
</div>
</div>

</body>
</html>
