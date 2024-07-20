<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/ai.png" type="image/png" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<style>

.header {
  overflow:hidden;
  background-color: #333;
  top: 0;
  width:100%;
  padding: 10px 5px;
  color:#FF0404  ;
}

/* Style the header links */
.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
  font-weight:bold;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
  color:#FF0404  ;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}




/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
/* Style the active/current link*/
a.act{
background: linear-gradient(to right, #fd746c 0%, #ff9068 100%);
color: white;
border-radius:30px;
}
a.logo2{
  background-color: #333;
}
</style>
</head>

<body>
  <div class="header">

    <a href="index.php" class="logo">Noble Blood Bank & Donation </a>
    <div class="header-right">
    <a href="admin.php"   >Admin</a>
    <a href="why_donate.php"  >Why Donate Blood</a>
      <a href="donate.php"  >Become A Donor</a>
      <a href="need.php" >Need Blood</a>
      <a href="contact.php" >Contact Us</a>
      

     
    </div>
  </div>

