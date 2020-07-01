<?php 
 include 'views/header.php';
 
 include 'connection.php';

$pagetitle = $_POST['page-title'];
$pagedes = $_POST['page-description'];

$insert = "INSERT INTO pages(
  page_title, page_descrtiption) 
  VALUES('$pagetitle', '$pagedes')";

if(mysqli_query($connect, $insert)){
  echo 'Data Inserted';
} else{
	echo 'There is an error';
}


 include 'views/footer.php';
?>	  
	 
