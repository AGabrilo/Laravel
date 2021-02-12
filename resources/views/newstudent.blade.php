@extends('layout')

@section('content')
<br><br>
<div  class="row justify-content-center align-items-center">
<div  class="column justify-content-center align-items-center col-md-3">
<div  class="col-md-12">
<form class="form" action="{{route('save.student')}}" method="post">
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
<h4>Add new student</h4><hr>
<div class="form-group">
 <label for="name" class="text-info">Name:</label><br>
 <input type="text" name="name" class="form-control" >
 </div>
 <div class="form-group">
 <label for="surname" class="text-info">Surname:</label><br>
 <input type="text" name="surname" class="form-control" >
 </div>
 <div class="form-group">
 <label for="age" class="text-info">Age:</label><br>
 <input type="text" name="age" class="form-control" value="{{old('age')}}">
 <span class="text-danger">@error('age'){{$message}} @enderror</span>
 </div>
 <div class="form-group">
 <label for="index" class="text-info">Index:</label><br>
 <input type="text" name="index" class="form-control" value="{{old('index')}}">
 <span class="text-danger">@error('index'){{$message}} @enderror</span>
 </div>
 <div class="form-group">
 <label for="subject" class="text-info">Subject:</label><br>
 <input type="text" name="subject" class="form-control" >
 </div>
 <div class="form-group">
 <button type="submit" name="Add" class="btn btn-success btn-md">Add student</button>                
</div>
</form>
</div>
</div>
</div>
@stop
