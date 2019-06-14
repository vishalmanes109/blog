<?php include 'database/db.php';?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="vishal mane">
    <title>--UN--known</title>


    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
    <link href="normailize.css" rel="stylesheet">

  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1><center>ADMIN PANEL<center></h1>

    </div>
  </div>

  <div class="container">
    <form action="action_post.php" method="post">
    <div class="form-group">
      <label for="usr">Author Name:</label>
      <input type="text" class="form-control" id="usr" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Post Title:</label>
      <input type="text" class="form-control" id="ttl" name="title">
    </div>
    <div class="form-group">
      <label for="comment">Actual Post Content:</label>
      <textarea class="form-control" rows="9" id="comment" name="content"></textarea>
    </div>
    <div class="row">
    <div class="form-group col-md-4" style="width:30%;">
     <label for="sel1">Post Category:</label>
     <select class="form-control" id="sel1" name="category">
       <option>Science</option>
       <option>Technology</option>
       <option>Health</option>
       <option>Business</option>
       <option>Travel</option>
       <option>Arts</option>
     </select>
     </div>
     <div class="form-group col-md-4">
       <label for="pwd">select Date</label>
       <input type="date" class="form-control" id="ttl" name="date">
     </div>
   </div>
     <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>


<footer class="blog-footer">
            <p class="copyright text-muted">Copyright &copy; READit 2019</p>

    <a href="#">Back to top</a>
</footer>
</body>
</html>
