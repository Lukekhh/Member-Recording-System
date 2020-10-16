<?php

include("auth/auth.php");
include("auth/conn.php");
include('header.php');

?>
<style>
.batch-active {
    color: blue !important;
}
</style>
<div class="my-5 container">

<form action="addbatch_code.php" method="post" class="col-md-6 col-sm-12 mx-auto">
<h5>Add Batch</h5>
    <div class="form-group">
        <label for="Batch">Batch</label>
        <input type="text" name="batch_no" class="form-control" placeholder="Enter batch.."><br>
    </div>
    <div class="form-group">
        <a href="batchlist.php" class="btn btn-sm btn-danger">Cancel</a>
        <input type="submit" class="btn btn-sm btn-success" value="Save">
    </div>
</form>
</div>




<?php

include('footer.php');

?>