<?php

include 'views/header.php';

?>
  <div class="container">
     <form action="create-page.php" method="post">
        <div class="form-group">
          <label for="page_id">Page Title</label>
          <input type="text" name="page-title" class="form-control" id="page_id" placeholder="Page Title">
        </div>
        <div class="form-group">
           <label for="page_desc">Page Description</label>
           <textarea class="form-control" name="page-description" id="page_desc" rows="3"></textarea>
        </div>
			<button type="submit" class="btn btn-primary">Save</button>
     </form>
   </div>


<?php
include 'views/footer.php'; 
?>