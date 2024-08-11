<?php
include 'header.php';
?>

<div class="container-fluid gallery-bg">
    <div class="row">
        <div class="col-lg-12">
            <button  class="btn btn-lg btn-transparent text-danger gallery-header" disabled>VIDEOS</button>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="video-container">
    <?php
        $q = " select * from videos ";
        $res = mysqli_query($con, $q);
 
        while ($data = mysqli_fetch_assoc($res)) {
        ?>
            <video src="./Videos/<?php echo $data['filename']; ?>" controls class="gallery-video"></video>
 
        <?php
        }
        ?>
    </div>
</div>
<?php
include 'footer.php'
?>