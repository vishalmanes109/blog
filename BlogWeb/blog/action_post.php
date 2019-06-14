<?php include "database/db.php";?>
<?php

if (isset($_POST["name"]) && !empty($_POST["name"])) {
$name=$_POST['name'];
$date=$_POST['date'];
$title=$_POST['title'];
$category=$_POST['category'];
$content=$_POST['content'];

$admin_sql="INSERT INTO `post`( `post_id`, `post_title`, `post_description`, `post_date`, `post_author`, `post_category`) VALUES (NULL,'$title','$content','$date','$name','$category')";

if ($conn->query($admin_sql) === TRUE) {

echo "data stored";
} else {
    echo "Error: " . $admin_sql . "<br>" . $conn->error;
}
}

 ?>
