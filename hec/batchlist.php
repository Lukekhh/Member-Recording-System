<?php

include("auth/auth.php");
include("auth/conn.php");
include('header.php');

$query = "SELECT * FROM batch ORDER BY id ASC";
$query_run = mysqli_query($conn, $query);

$row = mysqli_num_rows($query_run);

?>
<style>
    .batch-active{
        color:blue !important;
    }
</style>

<!-- php session for notification -->
<?php
    //adding batch  message 
    if(isset($_SESSION['addbatch_msg'])){
    ?>
    <!-- Bootstrap alert message for Adding batch  -->
    <div class="alert alert-success col-md-4 col-sm-12 my-3 mx-auto my-3">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?php echo $_SESSION['addbatch_msg']; ?>
    </div>



    <?php
    //session unset for Adding batch 
    unset($_SESSION['addbatch_msg']);

    }

    ?>
    <!-- ********** Updating batch  **********  -->

<?php
    //updating Batch message 
    if(isset($_SESSION['updatebatch_msg'])){
    ?>
    <!-- Bootstrap alert message for Adding batch  -->
    <div class="alert alert-info col-md-4 col-sm-12 mx-auto my-3">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?php echo $_SESSION['updatebatch_msg']; ?>
    </div>



    <?php
    //session unset for updating batch 
    unset($_SESSION['updatebatch_msg']);

    }

    ?>
<!-- ********** // Updating batch  **********  -->

<?php
    //updating batch message 
    if(isset($_SESSION['delbatch_msg'])){
    ?>
    <!-- Bootstrap alert message for Adding batch  -->
    <div class="alert alert-danger col-md-4 col-sm-12 mx-auto my-3">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <?php echo $_SESSION['delbatch_msg']; ?>
    </div>



    <?php
    //session unset for updating batch 
    unset($_SESSION['delbatch_msg']);

    }

    ?>
<!-- ********** // Updating batch  **********  -->
<div class="container">
<div class="mt-3">
    <div class="welcome-admin text-left">
        <h5 class="">Admin</h5>
    </div>
    
    <div class=" text-right">
        <a href="logout.php" class=" btn btn-sm 
        rounded-pill  bg-primary text-light text-decoration-none">Logout</a>
    </div>
   
</div>
<!-- end of admin header -->
<!-- batch #####  -->
<div class="row">
    <div class="mx-auto">
        <h5 class="text-left mt-5 mb-5">Batch</h5>
        <div class="table table-responive">
            <table>
                <thead>
                    <tr>
                        <th>Batch No</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php while($row = mysqli_fetch_assoc($query_run)) : ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['batch_no'] ?></td>
                        <td>
                            <a href="edit_batch.php?id=<?php echo $row['id'] ?>" class="btn btn-sm p-1 bg-success rounded text-light">Edit</a>
                            <a href="del_batch.php?id=<?php echo $row['id'] ?>" class="btn btn-sm p-1 bg-danger rounded text-light">Del</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
            <a href="addbatch.php" class="btn btn-sm btn-info my-5">
                Add Batch
            </a>
        </div>
    </div>
    </div>
    <!--  ******* //Batch ********  -->

    <?php

include('footer.php');

?>

    