<?php include_once 'config/init.php'; ?>
<?php include_once 'lib/Template.php';?>
<?php include_once 'lib/Apply.php'; ?>
<?php include_once 'lib/Database.php';?>
<?php 
$job = new Apply;
$template = new Template('templates/appfront.php');


    $template->title = 'List Of Applications';
    $template->jobs = $job->getAllApps();


echo $template;