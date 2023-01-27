<?php
$Name =$_POST["S_Name"];
$LastName= $_POST["S_LastName"];
$Address= $_POST["S_Address"];
$SunjectName= $_POST["S_SunjectName"];
include('connection.php');
//สร้างคำสั่ง sql
$sql = "INSERT INTO `tbl_customers` (`c_no`, `S_Name`, `S_LastName`, `S_Address`, `S_SunjectName`) VALUES (NULL, '$Name', '$LastName', '$Address', '$SunjectName');";

if ($conn->query($sql)) {
echo "New record created successfully";
header('location:ins_form.php'); //กลับไปยังหน้าตาราง
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>