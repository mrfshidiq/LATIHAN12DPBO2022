<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED); 
include("model/DB.class.php");
include("model/Template.class.php");
include("model/Pasien.class.php");
include("model/TabelPasien.class.php");
include("view/TampilPasien.php");

$pasien = new ProsesPasien();
$text = null;

if(isset($_GET['add'])=="1")
{
    $text = "FORM ADD";
    if(isset($_POST['submit'])){
        $pasien->dadd($_POST);
        header('location:index.php');
    }
}
if(isset($_GET['edit'])=="1")
{
    $text = "FORM EDIT";
    if(isset($_POST['submit'])){
        $pasien->dedit($_GET['edit'], $_POST);
        header('location:index.php');
    }
}
if(isset($_GET['del'])=="1")
{
    $pasien->ddel($_GET['del']);
    header('location:index.php');
}

$tpl = new Template("templates/form.html");
$tpl->replace("FORM WIW", $text);
$tpl->write();
?>