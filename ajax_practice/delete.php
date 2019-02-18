<?php 
 $conn = mysqli_connect("localhost", "root", "", "members"); 
 $sql = "DELETE FROM members WHERE id = '".$_POST["id"]."'"; 
 if(mysqli_query($conn, $sql)) 
 { 
 echo 'Data Deleted Successfully!'; 
 } 
 ?> 