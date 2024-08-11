<?php
include 'adminheader.php';
?>


<div class="video-page">


    <div class="text-center mt-3">
        <h1><span class="text-danger">Video</span> Gallery</h1>
    </div>


    <div id="content">
        <form method="POST" action="dash-video.php" enctype="multipart/form-data">
            <div class="form-group">
                <input class="form-control" type="file" name="uploadvideo" value="" required />
            </div>
            <div class="form-group mt-3">
                <button class="btn btn-primary" type="submit" name="videoupload">UPLOAD</button>
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST['videoupload'])) {
 
        $videofile = $_FILES["uploadvideo"]["name"];
        $tempvideo = $_FILES["uploadvideo"]["tmp_name"];
        $folder = "./Videos/" . $videofile;
    
        $q = "INSERT INTO videos (filename) VALUES ('$videofile')";
     
        mysqli_query($con, $q);
     
        if (move_uploaded_file($tempvideo, $folder)) {
            echo "<h3 class='text-danger text-center'>  Video uploaded successfully!</h3>
            <script>
            setTimeout(function(){
                window.location.href='dash-video.php';
            },1000);
            </script>
            ";
        } else {
            echo "<h3>  Failed to upload video!</h3>";
        }
    }
    ?>


    <div class="container mt-5">
    <div class="video-container">
    <?php
        $q = " select * from videos ";
        $res = mysqli_query($con, $q);
 
        while ($data = mysqli_fetch_assoc($res)) {
        ?>
        <div class="text-center mt-2">
            <video src="./Videos/<?php echo $data['filename']; ?>" controls class="gallery-video"></video>
            
            <form action="" method="post">
                    <input type="hidden" value="<?php echo $data['id']; ?>" name="id" />
                <button name="btndel" type="submit" class="btn btn-danger"><i class="fa-solid fa-trash " title="<?php echo $data['id']; ?>"></i></button>
            </form>
        </div>
        <?php
        }
        ?>
        <?php
        if(isset($_POST['btndel']))
        {
            $id=$_POST['id'];
            $q=mysqli_query($con,"delete from videos where id='$id'");
            if($q)
            {
                echo "<script>alert('Video deleted');
                setTimeout(function(){
                    window.location.href='dash-video.php';
                },1000);
                </script>";
            }
            else{
                echo mysqli_error($con);
            }
        }
        ?>
    </div>
</div>
</div>

</div>
</body>
</html>