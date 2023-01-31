<?php

$product= $_POST["product"];
$vat= $_POST["vat"];
$date= $_POST["date_sale"];
$price= $_POST["totolprice"];



include('connection.php');
//สร้างคำสั่ง sql
$sql = "INSERT INTO `tbl_sale` (`id_sale`, `product`, `vat`, `date_sale`, `totolprice`) VALUES (NULL, '$product', '$vat', '$date', '$price');";

if ($conn->query($sql)) {
echo "New record created successfully";
header('location:ins_form3.php'); //กลับไปยังหน้าตาราง
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>