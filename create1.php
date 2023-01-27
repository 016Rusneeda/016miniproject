<?php

$em_Name= $_POST["name_employee"];
$em_last= $_POST["lastname_employee"];
$em_tel= $_POST["tel_employee"];
$em_address= $_POST["address_employee"];
$em_salary= $_POST["salary_employee"];


include('connection.php');
//สร้างคำสั่ง sql
$sql = "INSERT INTO `tbl_employee` (`id_employee`, `name_employee`, `lastname_employee`, `tel_employee`, `address_employee`, `salary_employee`) VALUES (NULL, '$em_Name', '$em_last', '$em_tel', '$em_address', '$em_salary');";

if ($conn->query($sql)) {
echo "New record created successfully";
header('location:ins_form1.php'); //กลับไปยังหน้าตาราง
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>