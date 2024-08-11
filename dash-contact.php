<?php
include 'adminheader.php';
?>
<div class="main">


<div class="text-center mt-3 header-area">
    <h1><span class="text-danger">Contact</span> Table</h1>
</div>

<div class="container table-area mt-5">
<table id="example" class="table table-striped" style="width:100%">
  <thead class="table-dark">
  <tr>
        <th>Sr No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Car Name</th>
        <th>Model</th>
        <th>Message</th>
        <th>Date/Time</th>
        <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $c=1;
    $q="select * from contact";
    $res=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($res))
    {
        echo "<tr>
        <td>".$c."</td>
        <td>".$row['name']."</td>
        <td>".$row['email']."</td>
        <td>".$row['contact']."</td>
        <td>".$row['carname']."</td>
        <td>".$row['model']."</td>
        <td>".$row['message']."</td>
        <td>".$row['curdate']."</td>
        <td>
          <form action='' method='post'>
          <input type='hidden' value=".$row['id']." name='id' />
          <button name='btndel' type='submit' class='btn btn-danger'><i class='fa-solid fa-trash' title=".$row['id']."></i></button>
          </form>
        </td>
        </tr>";
        $c++;
    }
    ?>
  </tbody>
</table>
</div>

<?php
        if(isset($_POST['btndel']))
        {
            $id=$_POST['id'];
            $q=mysqli_query($con,"delete from contact where id='$id'");
            if($q)
            {
                echo "<script>alert('Row deleted');
                setTimeout(function(){
                    window.location.href='dash-contact.php';
                },1000);
                </script>";
            }
            else{
                echo mysqli_error($con);
            }
        }
        ?>

</div>
</body>
</html>