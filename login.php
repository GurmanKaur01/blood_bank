<?php
require_once 'includes/header.php';
require_once 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs
    session_start();
    $admin_username = mysqli_real_escape_string($conn, $_POST['admin_username']);
    $admin_password = mysqli_real_escape_string($conn, $_POST['admin_password']);

    // Prepare and execute the SQL query to retrieve the user's hashed admin_password
    $sql = "SELECT admin_password FROM admin_info WHERE admin_username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 's', $admin_username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $dbadmin_password);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    // Check if the admin_password is correct
    if ($dbadmin_password == $admin_password) {
        // admin_password is correct, redirect to lab.php

    session_start();
    $_SESSION['admin_username'] = $admin_username;
    echo $_SESSION["admin_username"];
    echo "Session ID: " . session_id();
    if(isset($_SESSION['admin_username'])){
        echo $_SESSION['admin_username'];
    }

    $cookie_name = "login_status";
    $cookie_value = 'loggedin';
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    
   
        header("Location: admin_page.php");
        
        exit(); // Ensure that script execution stops after redirection
    } else { 
        echo "The admin_password is incorrect";
        
    }
}

?>
