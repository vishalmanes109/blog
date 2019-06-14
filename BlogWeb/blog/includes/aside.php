
<body>

<aside class="col-md-4 blog-sidebar">
  <div class="p-4 mb-3 bg-light rounded">
    <h4 class="font-italic">About</h4>
    <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
  </div>



  <div class="p-4">
    <h4 class="font-italic">Follow Us</h4>
    <ol class="list-unstyled">
      <li><a href="#">linkedin</a></li>
      <li><a href="#">Facebook</a></li>
      <li><a href="#">GitHub</a></li>
      <li><a href="#">Twitter</a></li>
    </ol>
  </div>
  <div class="p-4">
    <h4 class="font-italic">Feature Articles</h4>
    <ol class="list-unstyled">
      <li><a href="../READit/index.html">The 10 Best-Selling Novels of All Time</a></li>
      <li><span>Live Soon!  </span><a href="#">Create Online Resume For FREE.</a></li>
    </ol>
  </div>

    <div class="p-4">
    <h4 class="font-italic">categories</h4>
    <ol class="list-unstyled">
      <li><a href="category_post.php?post_category=Technology">Technology</a></li>
      <li><i class="fa fa-flask" aria-hidden="true"></i> <a href="category_post.php?post_category=Science">Science</a></li>
      <li><a href="category_post.php?post_category=Business">Business</a></li>
      <li><a href="category_post.php?post_category=Health">Health</a></li>
      <li><a href="category_post.php?post_category=Travel">Travel</a></li>
      <li><a href="category_post.php?post_category=Arts">Arts</a></li>
    </ol>
  </div>

  <div class="p-4">
    <h4 class="font-italic">Archives</h4>
    <ol class="list-unstyled">
<!-- php code for archives old posts... -->
<?php
$archives_sql="select * from post order by post_id LIMIT 10";
$archives_result=$conn->query($archives_sql);
while($a_rows=$archives_result->fetch_assoc()){
  $a_title=ucwords($a_rows['post_title']);
  $a_description=$a_rows['post_description'];
  $a_date=$a_rows['post_date'];
  $a_author=ucwords($a_rows['post_author']);
  $a_categories=ucwords($a_rows['post_category']);
  $a_post_id=$a_rows['post_id'];

  echo"
      <li><a href='post.php?post_id= $a_post_id'>$a_title</a></li>

  ";
}
    ?>
    </ol>

    </div>


</aside><!-- /.blog-sidebar -->
</body>
