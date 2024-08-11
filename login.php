<?php
include 'header.php';
?>


<div class="container login-container mt-5">
    <div class="row">
        <div class="col-lg-6 ">
            <div class="login-left">
            <div class="text-center">
                <h2 class="my-5 text-light">Admin <span class="text-danger">Login</span></h2>
            </div>
<?php
if(isset($_POST['admin-btn']))
{
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $q="select * from dashboard where username='$user' and password='$pass'";
    $res=mysqli_query($con,$q);
    if(mysqli_num_rows($res)>0)
    {
        echo "<script>window.location.href='dashboard.php'</script>";
    }
    else{
        echo "<p class='text-danger'>Invalid Username or Password</p>";
    }
}
?>
            <form action="login.php" method="post"  class="mb-5">
                    <div class="form-floating mb-3">
                        <input type="username" class="form-control  text-light contact-form" name="username" id="floatingInput" placeholder="Enter Your Username " required>
                        <label for="floatingInput" class="text-light">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control  text-light contact-form" name="password" id="floatingInput" placeholder="Enter Your Password " required>
                        <label for="floatingInput" class="text-light">Password</label>
                    </div>
                    <button type="submit" class="btn-hover color-2 submit-button" name="admin-btn">Login</button>
                </form>
                </div>
        </div>
        <div class="col-lg-6">
            <h2 class="text-light text-center mt-5">We are <span class="text-danger ">Rep</span>airo</h2>
            <p class="text-light mt-5 justify">Repairo a part of Executive Group Company is power-packed with a bunch of car fanatics. In-fact the very basis of our existence is the manifestation of an urge to satisfy this very passion.</p>
            <img src="./Images/login-right.png" alt="" width="100%">
        </div>
    </div>
</div>


<?php
include 'footer.php';
?>