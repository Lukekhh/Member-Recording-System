<?php

include("auth/auth.php");
include("auth/conn.php");
include('header.php');

?>
<style>
.home-active {
    color: blue !important;
}
</style>
<div class="my-5 container">
    <form action="adddiocese_code.php" method="post" class="col-md-6 col-sm-12 mx-auto">
    <h5>Add Diocese</h5>
        <div class="form-group">
            <label for="Diocese">Diocese</label>
            <input type="text" name="diocese_name" class="form-control" placeholder="Enter diocese.."><br>
     
            <a href="home.php" class="btn btn-sm btn-danger">Cancel</a>
            <input type="submit" class="btn btn-sm btn-success" value="Save">
        </div>
    </form>
</div>




<?php

include('footer.php');

?>