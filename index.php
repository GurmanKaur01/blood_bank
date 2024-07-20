<?php 

require_once 'includes/header.php';
?>




<marquee backgroundcolor="slategrey" scrollamount="6" direction="left" style="font-weight: bold;">
   <p style="color:blue;"> Welcome to Noble Blood Bank Donation System ! You can read this page in any language , just scroll to the bottom.</p>
</marquee>

  <div id="page-container" style="margin-top:50px; position: relative; min-height: 84vh;   ">
    <div class="container">
    <div id="content-wrap" style="padding-bottom:55px;">
   

   
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1">
      <li data-target="#demo" data-slide-to="2">
      </li>
    </ol>

    <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
<a href="donate.php">
      <img class="d-block w-100" src="img/blood.png" alt="First slide" style="width:80%; height:400">
      </a>

    </div>
    
    <div class="carousel-item">
      <img class="d-block w-100" src="img/image1.jpg" alt="Third slide" style="width:80%; height:400">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
<br>
<br>
        <h1 style="text-align:center;font-size:45px;font-family:Georgia, 'Times New Roman', Times, serif"><b>Welcome to Noble Bank Donation System</b></h1>
<br>
        <br>
       

        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card  text-white"  style="background-color:lightseagreen;">Health Benefits</h4>

                        <prev class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                              1) Regular blood donation is linked to lower blood pressure and a lower risk for heart attacks.
                         <br>2) Every time you donate blood, you can save up to three lives
                         <br> 3) Every time you donate blood you burn 500 calories .
                        
                         </prev>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card" >
                    <h4 class="card-header card  text-white" style="background-color:lightseagreen;">Who can Donate ?</h4>

                    <prev class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                       1) Be 17 years of age or older, or 16 with parental consent.
                    <br> 2) Weigh at least 110 pounds.
                    <br> 3) Be in good health, feeling well, and not taking antibiotics. 
                    <br>4) Have last donated blood more than 8 weeks ago.
                     </prev>

                        </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card  text-white" style="background-color:lightseagreen;" >You could Help !</h4>

                    <prev class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                             1) Women with complications of pregnancy
                       <br>  2) Children with severe anaemia often resulting from malaria or malnutrition.
                       <br> 3) People with severe trauma following man-made and natural disasters.
                       <br> 4) Many complex medical and surgical procedures and cancer patients.                        
                     </prev>


                        </div>
            </div>
</div>

        <h2>Blood Donor Names</h2>

        <div class="row">
          <?php
            include 'conn.php';
            $sql= "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id order by rand() limit 3";
            $output=mysqli_query($conn,$sql);
            if(mysqli_num_rows($output)>0)
            {
            while($row = mysqli_fetch_assoc($output)) {
           ?>
            <div class="col-lg-4 col-sm-6 portfolio-item" ><br>
            <div class="card" style="width:300px">
                <img class="card-img-top" src="img/drop.jpg" alt="Card image" style="width:100%;height:300px">
                <div class="card-body">
                  <h3 class="card-title"><?php echo $row['donor_name']; ?></h3>
                  <p class="card-text">
                    <b>Blood Group : </b> <b><?php echo $row['blood_group']; ?></b><br>
                    <b>Phone No. : </b> <?php echo $row['donor_number']; ?><br>
                    <b>Gender : </b><?php echo $row['donor_gender']; ?><br>
                    <b>Age : </b> <?php echo $row['donor_age']; ?><br>
                    <b>Address : </b> <?php echo $row['donor_address']; ?><br>
                  </p>

                </div>
              </div>
        </div>
      <?php }} ?>
</div>
<br>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>BLOOD GROUPS</h2>
                
                <prev> Blood group of any human being mainly fall in any one of the following groups.</p>
                <ul>

                  <li>A positive or A negative</li>
                  <li>B positive or B negative</li>
                  <li>O positive or O negative</li>
                  <li>AB positive or AB negative.</li>
                </ul>
                <p>Your blood group is determined by the genes you inherit from your parents.<br>
                  A healthy diet helps ensure a successful blood donation, and also makes you feel better!
                </prev>

            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="img/pint.png" alt="" >
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
            <prev>
           Did you know that? 
           Blood group type O negative blood is the variety of blood that has the lowest risk of causing serious reactions for most people who receive it.
           Because of this, it's sometimes called the universal blood donor type.    
          </prev>
              </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="donate.php" style="align:center; background-color:blue;color:white ">Become a Donor </a>
            </div>
        </div>
        
            <div class="center">
            
        <div  id="google_translate_element"><span style="color:blue; align:center;">Translate page to your favourite language:</span>
      </div>

      <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
      </script>

      <script type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
      </div>
    </div>
  </div>
  
  <?php include('includes/footer.php');?>
</div>

</body>

</html>

