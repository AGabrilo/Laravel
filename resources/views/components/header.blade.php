<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <a class="navbar-brand" href="#">MyStudents</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" href="/dashboard">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('student.list')}}">All students</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('new.student')}}">Add student</a>
      </li>
      
     
    </ul>
    <form class="form-inline my-2 my-lg-0" type="get" action="{{url('/search')}}">
<input class="form-control mr-sm-2" name="query" type="search" placeholder="Search student" aria-label="Search"/>
<button type="submit" class="btn btn-outline-success my-2 my-sm-0 ">Search</button>
  </div>
</nav>