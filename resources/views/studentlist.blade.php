@extends('layout')

@section('content')

        
<div class="container">
         <div class="row">
            <div class="col-md-11 col-md-offset-3">
            <br><br>
                   <h4>List of all students</h4><hr>
                   @if(Session::get('student_deleted'))
                  <div class="alert alert-success">
                   {{Session::get('student_deleted')}}
                  </div>
@endif
                   </div>
                   <table class="table table-hover">
                      <thead>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Age</th>
                        <th>Index</th>
                        <th>Subject</th>
                        <th></th>
                        <th></th>
                      </thead>
                      <tbody>
                      @foreach ($students as $student)
                         <tr>
                         <td>{{$student->name}}</td>
                         <td>{{$student->surname}}</td>
                         <td>{{$student->age}}</td>
                         <td>{{$student->index}}</td>
                         <td>{{$student->subject}}</td>
                         <td><a href="/edit-student/{{$student->id}}" class="btn btn-success">Edit</a></td>
                         <td><a href="/delete-student/{{$student->id}}" class="btn  btn-danger ">Delete</a></td>
                         </tr>
                         @endforeach
                      </tbody>
                   </table>

                   
             </div>
         </div>
    </div>

    @stop