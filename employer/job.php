<?php include_once 'config/init.php'; ?>
<?php include_once 'lib/Template.php';?>
<?php include_once 'lib/Job.php'; ?>
<?php include_once 'lib/Database.php';?>
<?php 
$job = new Job;
if (isset($_POST['del_id'])){
    $del_id = $_POST['del_id'];
    if($job->delete($del_id)){
        redirect('index1.php', 'Job Deleted', 'success');
    } else {
        redirect('index1.php', 'Job Not Deleted', 'success');
    }
}
$template = new Template('templates/job-single.php');
$job_id = isset($_GET['id']) ? $_GET['id']:null;
$template->job = $job->getJob($job_id);
echo $template;