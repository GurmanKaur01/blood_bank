
<?php
require_once'includes/header.php'; ?>

<?php
if(isset($_POST["send"])){
  $name=$_POST['fullname'];
$number=$_POST['contactno'];
$email=$_POST['email'];
$message=$_POST['message'];
$conn=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
$sql= "insert into contact_query (query_name,query_mail,query_number,query_message) values('{$name}','{$number}','{$email}','{$message}')";
$output=mysqli_query($conn,$sql) or die("query unsuccessful.");
  echo '<div class="alert alert-success alert_dismissible"><b><button type="button" class="close" data-dismiss="alert">&times;</button></b><b>Query Sent, We will contact you shortly. </b></div>';
}?>

<div id="page-container"  action="login.php" method="POST" style="margin-top:50px; position: relative;min-height: 84vh;">
  <div class="container">
  <div id="content-wrap" style="padding-bottom:50px;">
    <h1 class="mt-4 mb-3">Contact</h1>
    <div class="row">
      <div class="col-lg-8 mb-4">
        <h3>Send us a Message</h3>
        <form name="sentMessage"  method="post">
            <div class="control-group form-group">
                <div class="controls">
                    <label>Full Name:</label>
                    <input type="text" class="form-control" id="name" name="fullname" required>
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Phone Number:</label>
                    <input type="tel" class="form-control" id="phone" name="contactno"  required >
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Email Address:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Message:</label>
                    <textarea rows="10" cols="100" class="form-control" id="message" name="message" required  maxlength="999" style="resize:none"></textarea>
                </div>
            </div>
            <button type="submit" name="send"  class="btn btn-primary">Send Message</button>
        </form>
    </div>
    
</div>
<!-- /.row -->


</div>
</div>

</div>
</body>

</html>
