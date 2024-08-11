<?php
include 'header.php';
?>

<?php
if(isset($_POST['contactbtn']))
{
    $contactname=$_POST['contactname'];
    $contactemail=$_POST['contactemail'];
    $contactphone=$_POST['contactphone'];
    $contactcarname=$_POST['carname'];
    $contactmodel=$_POST['model'];
    $contactmessage=$_POST['contactmessage'];
    $q="insert into contact(name,email,contact,carname,model,message,curdate) values('$contactname','$contactemail','$contactphone','$contactcarname','$contactmodel','$contactmessage',now())";
    if(mysqli_query($con,$q))
    {
        echo "<script>alert('Your message is submitted')</script>";
    }
    else{
        echo mysqli_error($con);
    }
}
?>
<?php
if(isset($_POST['feedbackbtn']))
{
    $feedbackname=$_POST['feedbackname'];
    $feedbackmessage=$_POST['feedbackmessage'];
    $q="insert into feedback(name,message,curdate) values('$feedbackname','$feedbackmessage',now())";
    if(mysqli_query($con,$q))
    {
        echo "<script>alert('Your message is submitted')</script>";
    }
    else{
        echo mysqli_error($con);
    }
}
?>

<div class="container contact-container ">
        <div class="row contact-row">
            <div class="col-lg-7 get-in-touch ">
                <h4>Get In Touch</h4>
                <form action="contact.php" method="post" >
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control  text-light contact-form" name="contactname" id="floatingInput" placeholder="Enter Your Name" required>
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control  text-light contact-form" name="contactemail" id="floatingInput" placeholder="Enter Your Email " required>
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control  text-light contact-form" name="contactphone" id="phone" placeholder="Enter Your Number" pattern="[0-9]{10}" required>
                        <label for="phone">Contact Number</label>
                    </div>
                    <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                        <input type="text" class="form-control  text-light contact-form" name="carname" id="floatingInput" placeholder="Your Car" required>
                        <label for="floatingInput">Your Car</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                        <input type="text" class="form-control  text-light contact-form" name="model" id="floatingInput" placeholder="Model Year.." required>
                        <label for="floatingInput">Model Year..</label>
                        </div>
                    </div>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control text-light contact-form" name="contactmessage" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;" required></textarea>
                        <label for="floatingTextarea">Message</label>
                    </div>
                    <button type="submit" class="btn-hover color-2 submit-button" name="contactbtn">Submit</button>
                </form>
            </div>
            <div class="col-lg-5 contact-us ">
                <h4>Contact Us</h4>
                <div class="mt-5">
                    <div class="d-flex contact-flex ">
                        <i class="fa-sharp fa-solid fa-location-dot contact-icon"></i>
                        <p class="ps-4">Near Fauji Chowk, Bibiwala Road, Bathinda, Punjab 151001</p>
                    </div>
                    <hr>
                    <div class="d-flex contact-flex ">
                        <i class="fa-solid fa-phone contact-icon "></i>
                        <p class="ps-4">Contact :- 8888888888</p>
                    </div>
                    <hr>
                    <div class="d-flex contact-flex">
                        <i class="fa-solid fa-envelope contact-icon"></i>
                        <p class="ps-4">Email:- Repairo@gmail.com</p>
                    </div>
                    <hr>
                    <div class="d-flex contact-flex">
                        <i class="fa-brands fa-chrome contact-icon"></i>
                        <p class="ps-5">Website: www.repairo.com</p>
                    </div>
                    <hr>
                </div>
            </div>
        </div>


        <div class="row feedback-row">
            <div class="col-lg-7 get-in-touch ">
                <h4>Give Feedback</h4>
                <form action="#" method="post" >
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control  text-light contact-form" id="floatingInput" placeholder="Enter Your Name" name="feedbackname" required>
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control text-light contact-form" name="feedbackmessage" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;" required></textarea>
                        <label for="floatingTextarea">Message</label>
                    </div>
                    <button type="submit" class="btn-hover color-2 submit-button  "  name="feedbackbtn">Submit</button>
                </form>
            </div>
            <div class="col-lg-5 p-0 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.910434055865!2d74.94288477568092!3d30.211103674840075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391732a28d93a569%3A0x903c5dc9acaeb54a!2sBibi%20Wala%20Road%20%26%20Fauji%20Chowk%2C%20sirki%20bazar%2C%20Chandsar%20Basti%2C%20Bathinda%2C%20Punjab%20151001!5e0!3m2!1sen!2sin!4v1689329065164!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

<?php
include 'footer.php';
?>