<?php
include 'adminheader.php';
?>


<div class="video-page">


    <div class="text-center mt-3">
        <h1><span class="text-danger">Blogs</span> Gallery</h1>
    </div>


    <div id="content">
        <form method="POST" action="dash-blogs.php" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <input class="form-control" type="file" name="uploadimg" value="" required />
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control  text-dark contact-form" name="blogname" id="floatingInput" placeholder="Enter Your Name" required>
                <label for="floatingInput">Heading</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control  text-dark contact-form" name="postby" id="floatingInput" placeholder="Enter Your Name" required>
                <label for="floatingInput">Post By</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control text-dark contact-form" name="description" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;" required></textarea>
                <label for="floatingTextarea">Message</label>
            </div>
            <div class="form-group mt-3">
                <button class="btn btn-primary" type="submit" name="blogimg">UPLOAD</button>
            </div>
        </form>
    </div>

<?php
if(isset($_POST['blogimg']))
{
    $heading=$_POST['blogname'];
    $postby=$_POST['postby'];
    $description=$_POST['description'];
    $blogfile = $_FILES["uploadimg"]["name"];
    $tempimg = $_FILES["uploadimg"]["tmp_name"];
    $folder = "./blogimg/" . $blogfile;
    $q="insert into blog_data (heading,postby,description,filename,curdate) values('$heading','$postby','$description','$blogfile',now())";
    if(mysqli_query($con,$q))
    {
        echo "<script>alert('Your message is submitted')</script>";
    }
    else{
        echo mysqli_error($con);
    }
    if (move_uploaded_file($tempimg, $folder)) {
        echo "<h3 class='text-danger text-center'>  Image uploaded successfully!</h3>
        <script>
        setTimeout(function(){
            window.location.href='dash-blogs.php';
        },1000);
        </script>
        ";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
?>
    
</div>



</div>
</body>
</html>