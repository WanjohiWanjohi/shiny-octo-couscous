<?php 
 $conn = mysqli_connect("localhost", "root", "", "members");
 $sql = "INSERT INTO members(first_name, last_name) VALUES('".$_POST["first_name"]."', '".$_POST["last_name"]."')"; 
 if(mysqli_query($conn, $sql)) 
 { 
 echo 'Record Inserted Successfully!'; 
 } 
 ?> 