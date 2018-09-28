
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
      <a class="navbar-brand" href="#">Welcome {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Add a post </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Log out </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Create a new post
          </h1>

          <!-- Blog Post -->
          
          <div class="card mb-4">
            <form method="post" action=" {{route('handleCreatePost')}} ">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input name="title"  type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title of the post">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Content</label>
                  <textarea style="height: 184px" name="content" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
              </form>
          </div>
          <!-- Blog Post -->
          

          <!-- Blog Post -->
         

          <!-- Pagination -->
         
        </div>

        <!-- Sidebar Widgets Column -->
        

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('/js/jquery.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>

  </body>

</html>
