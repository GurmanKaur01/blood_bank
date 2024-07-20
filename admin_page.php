<?php
require_once 'includes/newheader.php';
?>
<h1 style="color:seagreen;"><i>This page will be developed soon !</i></h1><br>
<h3 style="color:purple;"><i>Until then you may read the messages</i></h1><br>

<div class="container align-content-center">
          <?php
            include 'conn.php';
            $sql= "select * from contact_query  ";
            $output=mysqli_query($conn,$sql);
            if(mysqli_num_rows($output)>0)
            {
            while($row = mysqli_fetch_assoc($output)) {
           ?>
            <div class="table-responsive">
            <table class="table table-bordered" style="text-align:center">
                    <b>Email: </b> <b><?php echo $row['query_mail']; ?></b><br>
                    <b>Phone No. : </b> <?php echo $row['query_number']; ?><br>
                    <b>Message: </b><?php echo $row['query_message']; ?><br>
                    <b>Date Posted: </b> <?php echo $row['query_date']; ?><br>
                  </p>

            </table>
      <?php }} ?>
                </div>
            </div>
