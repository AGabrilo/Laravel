@extends('layout')

@section('content')
<div class="container">
         <div class="row">
            <div class="col-md-6 col-md-offset-3">
            <br><br>
                   <h4>Welcome {{ $LoggedUserInfo['username'] }}</h4><hr>
                   <table class="table table-hover">
                      <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                      </thead>
                      <tbody>
                         <tr>
                            <td>{{ $LoggedUserInfo['username'] }}</td>
                            <td>{{ $LoggedUserInfo['email'] }}</td>
                            <td><a href="{{ route('auth.logout') }}">Logout</a></td>
                         </tr>
                      </tbody>
                   </table>

                   
             </div>
         </div>
    </div>
@stop