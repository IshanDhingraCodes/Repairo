<?php
include 'header.php';
?>

<div class="container-fluid">
    <div class="row text-center" >
        <h1 class="text-danger fw-bold my-4 "><i class="fas fa-quote-left pe-2 text-danger fa-2xs" ></i> BLOGS <i class="fas fa-quote-right pe-2 text-danger fa-2xs" ></i></h1>
    </div>
</div>


<div class="blog-container">
    <?php
        $q="select * from blog_data order by id desc";
        $res=mysqli_query($con,$q);

        while($row=mysqli_fetch_array($res)){
            echo "
            <div class='col-lg-4'>
                <a href='blogdetail.php?id=".$row['id']."' class='text-dark text-decoration-none'>
                    <div class='card mt-5'>
                        <div class='card-title'>
                            <h3 class=' fw-bold text-center mt-3 blog-heading'>".$row['heading']."</h3>
                        </div>
                        <div class='card-body'>
                            <img class='img-fluid card-img' src='blogimg/".$row['filename']."' />
                            <p>by- ".$row['postby']."</p>
                            <hr>
                            <p><i class='far fa-clock pe-2'></i>".$row['curdate']."</p>
                        </div>
                    </div>
                </a>
                </div>        
            ";
        }

    ?>
</div>


<?php
include 'footer.php';
?>
