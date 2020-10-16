<?php

include('header.php');
include('auth/auth.php');
include('auth/conn.php');

?>

<style>
.member-active {
    color: white !important;
}
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add member</title>
</head>

<body>
<div class="container">
    <h5 class="my-3">Add Memeber</h5>

    <form action="add_member_code.php" method="POST" enctype="multipart/form-data">
        <div class="row ">

            <div class="col-md-6 col-sm-12">

                <label for="Name">Name</label>
                <input type="text" name="name" class="form-control"><br>

                <label for="">Nick Name</label>
                <input type="text" name="nickname" class="form-control"><br>

                <label for="Batch">Batch</label>
                <input type="text" name="batch_name" class="form-control"><br>

                <label for="graduate_year">Graduate-Year</label>
                <input type="text" name="graduate_year" class="form-control"><br>
        
                <label for="Diocese">Diocese</label>
                <input type="text" name="diocese" class="form-control"><br>

                <hr>
                <label for="Marital Status" class="mt-2">Marital Status</label><br>
                <span class="mr-1">Single:</span> 
                    <input type="radio" name="marital_status" 
                    <?php 
                        if(isset($marital_status) && $marital_status == "single") echo "checked";
                    ?> 
                    
                    value="single" class="mr-3"> 

                <span class="mr-1">Married:</span>
                <input type="radio" name="marital_status" 
                    <?php 
                        if(isset($marital_status) && $marital_status == "married") echo "checked";
                    ?> 
                    
                    value="married" class="mr-3"> 
                    <br><hr>

                <label for="HEC Sibling" class="mt-3">HEC Sibling</label>
                <br>
                <small class="text-warning samll">Note: Add comma ( , ) every other name.</small>
                <textarea name="sibling" id="" class="form-control" style="height:100px;"></textarea>

                <label for="Email" class="mt-4">Email</label>
                <input type="email" name="email" class="form-control"><br>

                <label for="contact">Contact No</label>
                <br>
                <small class="text-warning samll">Note: no need to type country code (09)</small>
                <input type="number" name="contact_no" class="form-control"><br>

            </div>
            <div class="col-md-4 col-sm-12 mt-3">
                <img src="img/default.png" style="width:150px; border:1px solid white;"  class="img-fluid" alt="">
                <input type="file" class="my-3" name="img_profile" placeholder="choose Profile Image">
                <div class="">
                    <a href="memberlist.php" class="btn btn-sm btn-danger">Cancel</a>
                    <input type="submit" class="btn btn-sm btn-success" value="Save">
                </div>
            </div>
        </div>
    </form>
    </div>
</body>
</html>



<?php
include('footer.php');

?>