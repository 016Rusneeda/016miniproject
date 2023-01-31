<?php

$name_pro= $_POST["name_product"];
$type_pro= $_POST["type_product"];
$price_pro= $_POST["price_product"];




include('connection.php');
//สร้างคำสั่ง sql
$sql = "INSERT INTO `tbl_products` (`id_product`, `name_product`, `type_product`, `price_product`) VALUES (NULL, '$name_pro', '$type_pro', '$price_pro');";

if ($conn->query($sql)) {
echo "New record created successfully";
header('location:ins_form4.php'); //กลับไปยังหน้าตาราง
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>  