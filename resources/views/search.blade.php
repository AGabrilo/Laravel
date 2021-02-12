@extends('layout')

@section('content')
<br><br>
<div class="container">
         <div class="row">
            <div class="col-md-11 col-md-offset-3">
<h4>Results</h4><hr>
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
                      @foreach ($s as $stud)
                         <tr>
                         <td>{{$stud->name}}</td>
                         <td>{{$stud->surname}}</td>
                         <td>{{$stud->age}}</td>
                         <td>{{$stud->index}}</td>
                         <td>{{$stud->subject}}</td>
                         <td><a href="/edit-student/{{$stud->id}}" class="btn btn-success">Edit</a></td>
                         <td><a href="/delete-student/{{$stud->id}}" class="btn  btn-danger ">Delete</a></td>
                         </tr>
                         @endforeach
                      </tbody>
                   </table>
                   </div>
         </div>
    </div>
@stop