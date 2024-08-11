<?php
include 'header.php';
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="about-heading text-center fw-bold text-light">More <span class="text-danger">Feedback</span></h1>
        </div>
    </div>
</div>


<section class="p-4 p-lg-5 text-center text-lg-start shadow-1-strong rounded" >
  <div class=" row d-flex justify-content-center">
    <div class="col-lg-10">
            <?php
        $q = " select * from feedback ";
        $res = mysqli_query($con, $q);
 
        while ($data = mysqli_fetch_array($res)) {
        ?>
      <div class="feedback-card">
        <div class="card-body m-3">
          <div class="row">
            <div class="col-lg-12">
            <h3 class="fw-bold  mb-2 text-center text-light"><?php echo $data['name']; ?></h3>
            <i class="fas fa-quote-left pe-2 text-dark"></i>  <p class="text-muted text-light mb-4">
            <?php echo $data['message']; ?>
              </p>
            </div>
          </div>
        </div>
      </div>
        <?php
        }
        ?>
    </div>
  </div>
</section>

<?php
include 'footer.php';
?>