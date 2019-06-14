<?php

$server="localhost";
$database="blog";
$username="root";
$password="";

$conn= new mysqli($server,$username,$password,$database);
/*
$sql= "SELECT * FROM POST";
$result= $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["post_id"]. " - Name: " . $row["post_title"]. " " . $row["post_description"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
*/
 ?>
