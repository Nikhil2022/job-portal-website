<?php include 'inc/header.php';?>
<h2 class="page-header"> <?php echo $job->first_name; ?> <?php echo $job->last_name; ?></h2>

<hr>
<p class="lead"><?php echo $job->descr;?></p>
<ul class="list-group">
    <li class="list-group-item"><strong>Email:</strong> <?php echo $job->email;?></li>
    <li class="list-group-item"><strong>Address:</strong> <?php echo $job->address;?></li>
    <li class="list-group-item"><strong>Contact Number:</strong> <?php echo $job->contact_num;?></li>
</ul>
<br><br>
<a href="index1.php">Go Back</a>
<br><br>
<div class="well">
    <form style="display:inline"
    method="post" action="apply1.php"><input type="hidden" name="rej_id" value="<?php echo $job->id;?>">
    <input type="submit" class="btn btn-danger" value="Reject">
</form>
<form style="display:inline"
    method="post" action="apply1.php"><input type="hidden" name="del_id" value="<?php echo $job->id;?>">
    <input type="submit" class="btn btn-success" value="Accept">
</form>
</div>
<?php include 'inc/footer.php';?>