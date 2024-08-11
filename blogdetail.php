<?php
include 'header.php';
?>

<div class="container bg-light mt-5 pb-5">
<?php
    $id=$_GET['id'];
    $q="select * from blog_data where id='$id'";
    $res=mysqli_query($con,$q);
    $row=mysqli_fetch_array($res);


        echo "
        <div class='col-lg-12'>
        <div class='row text-center' >
            <h1 class='text-danger fw-bold my-4 blog-heading '><i class='fas fa-quote-left pe-2 text-danger fa-2xs' ></i>".$row['heading']." <i class='fas fa-quote-right pe-2 text-danger fa-2xs' ></i></h1>
        </div>
        <img class='img-fluid' width='100%' src='blogimg/".$row['filename']."' />
        <p class=' mt-4'> by- ".$row['postby']."</p>
        <hr >
        <p><i class='far fa-clock pe-2'></i>".$row['curdate']."</p>
        <p class=' who-text justify'>".$row['description']."</p>
        </div>

        ";
?>
</div>

<?php
include 'footer.php';
?>