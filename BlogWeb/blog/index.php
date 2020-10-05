<?php
include"database/db.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="vishal mane">
    <title>READiT2</title>


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
    <link href="animate.css" rel="stylesheet">

  </head>
  <body>

    <?php
     $post_sql="select * from post";
     $post_result= $conn->query($post_sql);
     while($row =$post_result->fetch_assoc()){
     $post_title= ucwords($row["post_title"]);
     $post_description= substr($row["post_description"],0,450);
     $post_id=$row['post_id'];
     }
    ?>
    <?php include 'includes/navbar.php'?>

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark row">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic" style="color:orange;"><?php echo $post_title; ?> </h1>
      <p class="lead my-3"> <?php echo $post_description; ?></p>
      <p class="lead mb-0"> <a href="post.php?post_id=<?php echo $post_id; ?>" style="text-decoration:none;" class="text-white font-weight-bold">Continue reading...</a></p>
    </div >
      <div class="col-md-6 px-0">
        <img src='' alt="images">
      </div>
  </div>
  <br><br>
        <div class='row mb-2'>
          <?php
          $post_sql="select * from post  order by post_id desc limit 4 ";
          $post_result= $conn->query($post_sql);
          while($row =$post_result->fetch_assoc()){
          $post_title= ucwords($row["post_title"]);
          $post_description= substr($row["post_description"],0,300);
          $post_date=$row['post_date'];
          $post_author=ucwords($row['post_author']);
          $post_catagories= ucwords($row['post_category']);
          $post_id1=$row['post_id'];

          echo"
            <div class='col-md-6'>
              <div class='row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>
                <div class='col p-4 d-flex flex-column position-static'>
                  <a  href='post.php?post_id=$row[post_id]; ' > <strong class='d-inline-block mb-2 text-primary' style='font-size:1.3em;' > $post_title </strong></a>
          <h3 class='mb-0'></h3>
          <div class='mb-1 text-muted' ><a href='category_post.php?post_category=$post_catagories'> $post_catagories</a> | $post_date | <a href='profile.php?author_name=$post_author'> $post_author</a></div>
          <p class='card-text mb-auto'>$post_description</p>
          <a href='post.php?post_id= $post_id1'>Continue reading...<br></a>
        </div>
        <div class='col-auto d-none d-lg-block'>
        </div>
      </div>
    </div>";}
    ?>

<main role="main" class="container">

  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom" style="color:green;">
        Random Post
      </h3>
    <?php
    $sql1="select post_id from post";
    $result1=$conn->query($sql1);
    $count=0;
    while ($rows=$result1->fetch_assoc()) {
      $count++;
    }


    $rand=rand(1,$count);
    $random_sql="select * from post where post_id='$rand' ";
    $random_result=$conn->query($random_sql);
    while($random=$random_result->fetch_assoc()){
      $random_title= ucwords($random["post_title"]);
      $random_description= substr($random["post_description"],0,900);
      $random_date=$random['post_date'];
      $random_author=ucwords($random['post_author']);
      $random_catagories= ucwords($random['post_category']);
      $random_post_id=$random['post_id'];
    }

    ?>

      <div class="blog-post">
        <h2 class="blog-post-title"><?php echo $random_title; ?> </h2>
        <p class="blog-post-meta"><?php echo $random_date; ?> By <a href="profile.php?author_name=<?php echo $random_author;?>"><?php echo $random_author; ?></a></p>

         <p> <?php echo $random_description. '...........'; ?> </p>
         <button   type='button' class='btn btn-primary';'>
            <span class='spinner-border spinner-border-sm'></span>
            <a style='color:white; text-decoration:none;' href='post.php?post_id=<?php echo $random_post_id; ?>'> Know This.... </a>
          </button>
      </div><!-- /.blog-post -->


  <!-- recent post -->
      <div class="col-md-8 blog-main ">
        <h3 class="pb-4 mb-4 font-italic " style="color:purple; margin-left:-5%;">
          Recent Uploads
         </h3>
      </div>
       <div class="blog-post">
         <hr>

<!-- php for recent upload post-->
     <?php
      $newpost_sql="select * from POST order by post_id desc LIMIT 2";
      $newpost_result=$conn->query($newpost_sql);
      while($newrow=$newpost_result->fetch_assoc()){
        $newpost_title= ucwords($newrow["post_title"]);
        $newpost_description= substr($newrow["post_description"],0,1000);
        $newpost_date=$newrow['post_date'];
        $newpost_author=ucwords($newrow['post_author']);
        $newpost_catagories= ucwords($newrow['post_category']);
      echo"

        <h2 class='blog-post-title'> $newpost_title</h2>

        <p class='blog-post-meta' > $newpost_date By <a href='profile.php?author_name=$newpost_author'> $newpost_author</a></p>

        <p>$newpost_description '...........' </p>
        <button   type='button' class='btn btn-primary' style=''>
           <span class='spinner-border spinner-border-sm'></span>
           <a style='color:white; text-decoration:none;' href='post.php?post_id= $post_id'> Know This.... </a>
         </button><br><br>";
      }

   ?>

      </div><!-- /.blog-post -->



    </div><!-- /.blog-main -->

    <?php include"includes/aside.php";?>
  </div><!-- /.row -->

</main><!-- /.container -->
</div>

<footer class="blog-footer">
            <p class="copyright text-muted">Copyright &copy; READit 2019</p>

    <a href="#">Back to top</a>
</footer>
</body>
</html>
