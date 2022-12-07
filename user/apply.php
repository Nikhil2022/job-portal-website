<?php include_once 'config/init.php'; ?>
<?php include_once 'lib/Template.php';?>
<?php include_once 'lib/Apply.php'; ?>
<?php include_once 'lib/Database.php';?>
<?php include_once 'helpers/system_helpers.php';?>
<?php 
$job = new Apply;
if (isset($_POST['submit'])){
    $data = array();
    $data['first_name']=$_POST['first_name'];
    $data['last_name']=$_POST['last_name'];
    $data['descr']=$_POST['descr'];
    $data['email']=$_POST['email'];
    $data['address']=$_POST['address'];
    $data['contact_num']=$_POST['contact_num'];
    if($job->create($data)){
        redirect('index1.php', 'You have applied successfully!','success');
    } else {
        redirect('index1.php', 'Something went wrong', 'error');
    }
}
$template = new Template('templates/job-apply.php');
echo $template;