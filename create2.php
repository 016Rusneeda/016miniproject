<?php
$n_type =$_POST["name_type"];

include('connection.php');
//สร้างคำสั่ง sql
$sql = "INSERT INTO `tbl_type_product` (`id_type`, `name_type`) VALUES (NULL, '$n_type');";

if ($conn->query($sql)) {
echo "New record created successfully";
header('location:ins_form2.php'); //กลับไปยังหน้าตาราง
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>