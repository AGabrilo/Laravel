@extends('layout')

@section('content')
<br><br>
<div  class="row justify-content-center align-items-center">
<div  class="column justify-content-center align-items-center col-md-3">
<div  class="col-md-12">
<form class="form" action="{{route('update.student')}}" method="post">
@if(Session::get('student_changed'))
<div class="alert alert-success">
{{Session::get('student_changed')}}
</div>
@endif


@csrf
<h4>Edit student</h4><hr>
<input type="hidden" name="id" value="{{$student->id}}"/>
<div class="form-group">
 <label for="name" class="text-info">Name:</label><br>
 <input type="text" name="name" class="form-control" value="{{$student->name}}" >
 </div>      

<div class="form-group">
 <label for="surname" class="text-info">Surname:</label><br>
 <input type="text" name="surname" class="form-control" value="{{$student->surname}}">
 </div>
 <div class="form-group">
 <label for="age" class="text-info">Age:</label><br>
 <input type="text" name="age" class="form-control" value="{{$student->age}}">
 </div>
 <div class="form-group">
 <label for="index" class="text-info">Index:</label><br>
 <input type="text" name="index" class="form-control" value="{{$student->index}}">
 </div>
 <div class="form-group">
 <label for="subject" class="text-info">Subject:</label><br>
 <input type="text" name="subject" class="form-control" value="{{$student->subject}}">
 </div>
 <div class="form-group">
 <button type="submit" name="Edit" class="btn btn-success">Edit student</button>  
 <a href="/studentlist" class="btn btn-info ">Back</a>   
 </div> 
</form>
</div>
</div>
</div>


@stop