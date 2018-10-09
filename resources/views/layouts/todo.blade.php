<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>@yield('title')</title>
        <!-- Bootstrap -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    
    <body>
         <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="{{ url('/admin') }}">Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.users.index')}}">Users <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.users.create')}}">Add New Users <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.categories.index')}}">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.categories.create')}}">Add New Category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.posts.index')}}">Posts</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{route('admin.posts.create')}}">Add New Post</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
 
                 @yield('content')
                            <!-- /block -->
                        
                    
                
        <footer>
            <p align="left" ><font  color="#3399CC"> <center>&copy;  {{ date('Y') }} Alphatech Blog with Laravel</center></font> </p>
        </footer>
      </div>
        <!--/.fluid-container-->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
    </body>

</html>