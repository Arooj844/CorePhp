<?php

include 'views/header.php';
include 'connection.php'; 
$id = $_REQUEST['page_id'];
$edit = "SELECT * FROM pages WHERE page_id=$id";

$result = mysqli_query($connect, $edit);

$row = mysqli_fetch_assoc($result);
?>
<div class="container">
<h2><?php echo $row['page_title'] ; ?></h2>
<p><?php echo $row['page_descrtiption'] ; ?></p>
</div>


<?php

include 'views/footer.php'; 

?>