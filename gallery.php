<?php
include 'header.php';
?>
<div class="container-fluid gallery-bg">
    <div class="row">
        <div class="col-lg-12">
            <button  class="btn btn-lg btn-transparent text-danger gallery-header" disabled>GALLERY</button>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="image-container">
    <?php
        $q = " select * from images ";
        $res = mysqli_query($con, $q);
 
        while ($data = mysqli_fetch_assoc($res)) {
        ?>
            <a href="./Gallery/<?php echo $data['filename']; ?>" data-lightbox="roadtrip"><img src="./Gallery/<?php echo $data['filename']; ?>" class="gallery-image"></a>
 
        <?php
        }
        ?>
    </div>
</div>
<?php
include 'footer.php';
?>