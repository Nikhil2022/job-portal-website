<?php include 'inc/header.php';?>
    <h2 class="page-header">Apply for job</h2>
    <form method="post" action="apply.php">
    <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" name="first_name">
    </div>
    <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" name="last_name">
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" name="descr"></textarea>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" name="address">
    </div>
    <div class="form-group">
        <label>Contact Number</label>
        <input type="text" class="form-control" name="contact_num">
    </div>
    <input type="submit" class="btn btn-primary" value="Submit" name="submit">
    </form>
<?php include 'inc/footer.php';?>