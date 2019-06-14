<?php include 'database/db.php'; ?>

<!DOCTYPE html>
<html lang="en-US">

<head>

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- SEO -->
	<title>Profile</title>

	<!-- Styles -->
	<link rel='stylesheet' href='assets/css/split.css' type='text/css' media='screen' />
	<meta name="viewport" content="width=device-width,initial-scale=1" />

</head>

<body id="fullsingle" class="page-template-page-fullsingle-split">

<div class="fs-split">

	<!-- YouTube Video Side -->
	<div class="split-image split-video">
	<div class="video-wrap">
		<div class="video-container">
			<iframe class="video-content" src="https://www.youtube.com/embed/N_Yn8yq9EQY?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1&amp;loop=1&amp;mute=1&playlist=dk9uNWPP7EA" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	</div>

<!-- php code -->
<?php
  if(isset($_GET['author_name'])){
   $post_author=$_GET['author_name'];
   //echo "hi";

   $sql="select * from admin where author_name='$post_author'";
   $result=$conn->query($sql);
   while($rows=$result->fetch_assoc()){
     $author_id=$rows['author_id'];
     $author_name=ucwords($rows['author_name']);
     $author_email=$rows['author_email'];
     $author_contact=$rows['author_contact'];
     $author_about=$rows['author_about'];
     //echo $author_id." ".$author_name;
   }

 }

 ?>

	<!-- Content Side -->
	<div class="split-content">

		<div class="split-content-vertically-center">

			<div class="split-intro">

				<h1></h1>

				<span class="tagline"><?php echo $author_name;?>.</span>

			</div>

			<div class="split-bio">
        <div>EMAIL ID: <a href='mailto:<?php echo $author_email;?>'> <?php echo $author_email;?></a><br><br>
        <div>CONTACT NO: <a  href='tel:<?php echo $author_contact;?>'> <?php echo $author_contact;?></a><br><br>

			</div>

			<div class="split-lists">

				<div class="split-list">

					<h3>Social</h3>

					<ul>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Instagram</a></li>
						<li><a href="#">Dribbble</a></li>
					</ul>

				</div>


			</div>

			<div class="split-credit">

				<p>&copy;2019 <a href="#"></a></p>



			</div>

		</div>

	</div>

</div>

</body>
</html>
