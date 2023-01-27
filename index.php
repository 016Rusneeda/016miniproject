<?php session_start();
include('connection.php');
$ID = $_SESSION['a_id'];
$name = $_SESSION['a_username'];
$level = $_SESSION['a_level'];
if($level!='A'){
Header("Location:form_logout.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>

<div class="container">
        <a href="ins_form.php" class="btn btn-success">Customer</a>
        <a href="ins_form1.php" class="btn btn-success">Employees</a>
        <a href="ins_form2.php" class="btn btn-success">Product Type</a>
        <a href="ins_form3.php" class="btn btn-success">Sale</a>
        <a href="ins_form4.php" class="btn btn-success">product</a>
        <a href="logout.php" class="btn btn-danger">logout</a>

