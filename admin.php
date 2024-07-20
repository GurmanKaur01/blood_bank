<?php
session_start();

    
?>

<?php
$title = "BloodBank";
require_once 'includes/header.php';
?>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        
        
        <form class="p-5 rounded shadow" action="login.php" method="POST" style="width:30rem">
            <h1 class="text-center pb-5 display-4"><b><i>ADMIN LOGIN</i>
        
        
        </b></h1>
            <?php if (isset($_GET['error'])){?>
                <div class="alert alert-danger" role="alert">
                    <?php  echo $_GET['error']; ?>
                   
                </div>
    <?php  } ?>
           
        <div class="mb-3">
        <div class="font-italic" style="font-weight:bold">Username<span style="color:red">*</span></div>
            <input type="username"  name="admin_username" class="form-control" id="admin_username" aria-describedby="usernameHelp">
           
        </div>
        <div class="mb-3">
        <div class="font-italic" style="font-weight:bold">Password<span style="color:red">*</span></div>
        <input type="password"  name="admin_password" class="form-control" id="admin_password">
        </div>
    
        <button type="submit" class="btn btn-primary align-content-center">Login</button>
       
        </form>
    </div>
   


   <script src="./js/bootstrap.bundle.js"></script>
</body> 





   