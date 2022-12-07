<?php include_once 'config/init.php'; ?>
<?php include_once 'lib/Template.php';?>
<?php include_once 'lib/Apply.php'; ?>
<?php include_once 'lib/Database.php';?>
<?php 
$job = new Apply;
if (isset($_POST['del_id'])){
    $del_id = $_POST['del_id'];
    if($job->delete($del_id)){
        redirect('index1.php', 'Application Accepted', 'success');
    }
}
if (isset($_POST['rej_id'])){
    $del_id = $_POST['rej_id'];
    if($job->delete($del_id)){
        redirect('index1.php', 'Application Rejected', 'success');
    } 
}
$template = new Template('templates/apply-single.php');
$job_id = isset($_GET['id']) ? $_GET['id']:null;
$template->job = $job->getJob($job_id);
echo $template;