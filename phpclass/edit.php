<?php

include 'views/header.php';

include 'connection.php';

$id = $_REQUEST['page_id'];

$edit = "SELECT * FROM pages WHERE page_id=$id";

$result = mysqli_query($connect, $edit);

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){
	$pagetitle = $_POST['page-title'];
	$pagedes = $_POST['page-description'];
	
	$update = "UPDATE pages SET page_title='$pagetitle', page_descrtiption='$pagedes' WHERE page_id=$id";

    if(mysqli_query($connect, $update)){
		echo "Data Updated";
	} else{
		echo "Error";
	}
}


?>
 <div class="container">
     <form action="" method="post" name="mydata">
        <div class="form-group">
          <label for="page_title">Page Title</label>
          <input type="text" name="page-title" class="form-control" id="page_title" value="<?php echo $row['page_title'] ; ?>">
        </div>
        <div class="form-group">
           <label for="page_desc">Page Description</label>
           <textarea class="form-control" name="page-description" id="page_desc" rows="3"><?php echo $row['page_descrtiption'] ; ?></textarea>
        </div>
			<button type="submit" class="btn btn-primary" name="update">Update</button>
     </form>
   </div>	

<?
include 'views/footer.php';

?>