<?php
include 'adminheader.php';
?>


<div class="gallery-page">


    <div class="text-center mt-3">
        <h1><span class="text-danger">Image</span> Gallery</h1>
    </div>


    <div id="content">
        <form method="POST" action="dash-gallery.php" enctype="multipart/form-data">
            <div class="form-group">
                <input class="form-control" type="file" name="uploadfile" value="" required />
            </div>
            <div class="form-group mt-3">
                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST['upload'])) {
 
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "./Gallery/" . $filename;
    
        $q = "INSERT INTO images (filename) VALUES ('$filename')";
     
        mysqli_query($con, $q);
     
        if (move_uploaded_file($tempname, $folder)) {
            echo "<h3 class='text-danger text-center'>  Image uploaded successfully!</h3>
            <script>
            setTimeout(function(){
                window.location.href='dash-gallery.php';
            },1000);
            </script>
            ";
        } else {
            echo "<h3>  Failed to upload image!</h3>";
        }
    }
    ?>


    <div class="container mt-5">
    <div class="image-container">
    <?php
        $q = " select * from images ";
        $res = mysqli_query($con, $q);
 
        while ($data = mysqli_fetch_assoc($res)) {
        ?>
        <div class="text-center mt-2">
            <a href="./Gallery/<?php echo $data['filename']; ?>" data-lightbox="roadtrip">
            <img src="./Gallery/<?php echo $data['filename']; ?>" class="gallery-image">
            </a>
            
            
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
            $q=mysqli_query($con,"delete from images where id='$id'");
            if($q)
            {
                echo "<script>alert('Image deleted');
                setTimeout(function(){
                    window.location.href='dash-gallery.php';
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