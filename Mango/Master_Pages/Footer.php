   <?php
        include("Database_Connection/connect.php");
        if($con)
            mysqli_select_db($con,'mango');
            $yt=$it=$li=$pt=$home=$email=$contact="";
            $query="select * from social_links";
            $result=mysqli_query($con,$query);
            $countLinks=mysqli_num_rows($result);
            if($countLinks==1)
            {
                $row=mysqli_fetch_assoc($result);
                $yt=$row['yt'];
                $it=$row['insta'];
                $li=$row['linkedin'];
                $pt=$row['pintrest'];
                $home=$row['location'];
                $email=$row['email'];
                $contact=$row['contact'];

            }
            mysqli_close($con);
             ?>
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-4 text-sm-center text-md-left">
              <div class="footer-logo"><img src="assets/images/logo.png" alt=""></div>
              <div class="footer-contact">
                <p>Address: <?php echo $home;?></p>
                <p>Phone: <?php echo $contact;?></p>
                <p>Email: <?php echo $email;?></p>
              </div>
              <div class="footer-social"><a class="round-icon-btn" href="<?php echo $yt?>"><i class="fab fa-youtube"> </i></a><a class="round-icon-btn" href="<?php echo $it?>"><i class="fab fa-instagram"></i></a><a class="round-icon-btn" href="<?php echo $li?>"><i class="fab fa-invision"> </i></a><a class="round-icon-btn" href="<?php echo $pt?>"><i class="fab fa-pinterest-p"></i></a></div>
            </div>
            <div class="col-md-8">
              <div class="row">
                <div class="col-12 col-sm-4 text-sm-center text-md-left">
                  <div class="footer-quicklink">
                    <h5>Infomation</h5><a href="about_us.php">About us</a><a href="#">Check out</a><a href="#">Contact</a><a href="#">Service</a>
                  </div>
                </div>
                <div class="col-12 col-sm-4 text-sm-center text-md-left">
                  <div class="footer-quicklink">
                    <h5>My Account</h5><a href="#">My Account</a><a href="#">Contact</a><a href="#">Shopping cart</a><a href="#">Shop</a>
                  </div>
                </div>
                <div class="col-12 col-sm-4 text-sm-center text-md-left">
                  <div class="footer-quicklink">
                    <h5>Quick Shop</h5><a href="about_us.php">About us</a><a href="#">Check out</a><a href="#">Contact</a><a href="#">Service</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="newletter">
          <div class="container">
            <div class="row justify-content-between align-items-center">
              <div class="col-12 col-md-7">
                <div class="newletter_text text-center text-md-left">
                  <h5>Join Us</h5>
                  <p>Get sms updates about latest uploads.</p>
                </div>
              </div>
              <div class="col-12 col-md-5">
                <div class="newletter_input">
                  <input class="round-input" type="text" placeholder="Enter your mobile number">
                  <button>Subcribe</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-credit">
          <div class="container">
            <div class="footer-creadit_block d-flex flex-column flex-md-row justify-content-start justify-content-md-between align-items-baseline align-items-md-center">
              <p class="author">Copyright © 2019 Sapan Naik - All Rights Reserved.<br/>Devloped By - Viral Soni</p><img class="payment-method" src="assets/images/payment.png" alt="">
            </div>
          </div>
        </div>
      </footer>