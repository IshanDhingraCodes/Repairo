<?php
if(isset($_POST['emailbtn']))
{
    $newsemail=$_POST['newsemail'];
    $q="insert into news(email,curdate) values('$newsemail',now())";
    if(mysqli_query($con,$q))
    {
        echo "<script>alert('Your message is submitted')</script>";
    }
    else{
        echo mysqli_error($con);
    }
}
?>


<!-- footer -->
<div class="footer mt-5 ">
  <div class="container-fluid ps-5 pe-5 ">
    <div class="row">
      <div class="col-lg-3 col-md-6 mt-5">
        <h4 class=" ps-5 text-danger mb-3">shortcut links</h4>
        <ul class="  footer-list ">
            <li><a href="index.php"class="btn footer-btn text-light mb-2">Home</a></li>
            <li><a href="who_we_are.php"class="btn footer-btn text-light mb-2">Who we are</a></li>
            <li><a href="what_we_do.php"class="btn footer-btn text-light mb-2">What we do</a></li>
            <li><a href="login.php"class="btn footer-btn text-light mb-2">Admin Login</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 mt-5">
        <h4 class=" ps-5 text-danger mb-3">important links</h4>
        <ul class="  footer-list">
            <li><a href="gallery.php"class="btn footer-btn text-light mb-2">Gallery</a></li>
            <li><a href="videos.php"class="btn footer-btn text-light mb-2">Videos</a></li>
            <li><a href="contact.php"class="btn footer-btn text-light mb-2">Contact Us</a></li>
            <li><a href="privacy_policy.php"class="btn footer-btn text-light mb-2">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 mt-5">
        <h4 class=" ps-5 text-danger mb-3">product & services</h4>
        <ul class=" footer-list">
            <li><a href="modification.php"class="btn footer-btn text-light mb-2">Modification</a></li>
            <li><a href="lounge.php"class="btn footer-btn text-light mb-2">Lounge</a></li>
            <li><a href="motor-homes.php"class="btn footer-btn text-light mb-2">Motor Homes</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6" >
        <form action="#" method="post">
          <div class="form-floating mb-3 mt-5">
            <input type="text" class="form-control subscribe text-light " id="email" placeholder="Enter email" name="newsemail" required>
            <label class="text-light" for="email">Subscribe Newsletter</label>
          </div>
          <button type="submit" class="btn btn-danger" name="emailbtn">Submit <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i></button>
        </form>
        <h2 class="text-danger text-center mb-4 mt-5 follow">Follow Us</h2>
        <div class="social-links">
          <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="https://in.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="https://twitter.com/i/flow/login?redirect_after_login=%2F%3Flang%3Den-in" target="_blank"><i class="fa-brands fa-twitter"></i></a>
          <a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a>
          <a href="https://web.whatsapp.com/" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
          <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-12">
        <p class="text-light text-center justify">© Copyright 2023 Repairo All Rights Reserved  | Designed by  Ishan Dhingra.</p>
      </div>
    </div>
  </div>

<!-- jquery -->

  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>  

<!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/lightbox.min.js"></script>

<!-- aos -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  
</body>
</html>
