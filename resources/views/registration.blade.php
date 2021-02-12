<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<br><br><br>

<div  class="row justify-content-center align-items-center">
<div  class="column justify-content-center align-items-center col-md-3">
<div  class="col-md-12">
<form  class="form" action="{{route('auth.save')}}" method="post">

@if(Session::get('success'))
<div class="alert alert-success">
{{Session::get('success')}}
</div>
@endif

@if(Session::get('fail'))
<div class="alert alert-danger">
{{Session::get('fail')}}
</div>
@endif
@csrf

                            <h3 class="text-center text-info">Registration</h3>
                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="text" name="email" class="form-control" value="{{old('email')}}" >
                                <span class="text-danger">@error('email'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" class="form-control" value="{{old('username')}}">
                                <span class="text-danger">@error('username'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" class="form-control" value="{{old('password')}}">
                                <span class="text-danger">@error('password'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                            <button type="submit" name="Register" class="btn btn-info btn-md">Register</button>                
                            </div>
                            <div class="form-group">
                                           <a href="{{route('auth.l')}}">I already have an account, sign in</a>
                            </div>
              
                        </form>
</div>
</div>
</div>





</body>
</html>