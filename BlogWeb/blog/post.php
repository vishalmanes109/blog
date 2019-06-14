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
  <?php
   include 'includes/navbar.php';
  ?>

  <?php

  if(isset($_GET['post_id'])){
   $post_id=$_GET['post_id'];

   //$post_id=2;
   $sql="select * from post where post_id='$post_id'";
   $result=$conn->query($sql);
   while($rows=$result->fetch_assoc()){
     $title=ucwords($rows['post_title']);
     $description=$rows['post_description'];
     $date=$rows['post_date'];
     $author=ucwords($rows['post_author']);
     $categories=ucwords($rows['post_category']);
     $first_letter=$description{0};
     $description=substr($description,1);
     //echo $first_letter;

    echo"


  <div class='no-gutters border rounded'>
    <div class=' p-4'>

      <h4><a  style='color:primary;font-size:2em; font-weight: 700; width: 40%; text-decoration: none;' href='post.php?post_id=$post_id' > <center> $title </center></a></h4>
<h3 class='mb-0' ></h3>
<br>
<div class='mb-1 text-muted' style='font-size:1em;' ><a href='category_post.php?post_category=$categories'> $categories</a> | $date | <a href='profile.php?author_name=$author'> $author</a></div><br>

<p style='font-size:1.3em;' class='card-text mb-auto'><span style='font-size:2em;font-family:red serif; color:purple;'> $first_letter </span>$description</p>
</div>
<div class='col-auto d-none d-lg-block'>
</div>
</div>";
}

}
?>



<footer class="blog-footer">
            <p class="copyright text-muted">Copyright &copy; READit 2019</p>

    <a href="#">Back to top</a>
</footer>
</body>
</html>
