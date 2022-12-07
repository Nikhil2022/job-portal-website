<?php include 'inc/header.php';?>

      <div class="jumbotron">
        <h1>Applications</h1>
      </div>
      <h3><?php echo $title;?></h3>
        <?php foreach($jobs as $job): ?>
      <div class="row marketing">
        <div class="col-lg-10">
          <h4><?php echo $job->first_name;?></h4>
          <p><?php echo $job->descr;?>.</p>
        </div>
        <div class="col-md-2">
            <a class="btn btn-default" href="apply1.php ?id=<?php echo $job->id; ?>">View</a>
        </div>
      </div>
      <?php endforeach;?>
      
      

<?php include 'inc/footer.php';?>
