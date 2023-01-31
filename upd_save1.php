<?php
$em_id = $_GET["id_employee"];
$em_Name= $_POST["name_employee"];
$em_last= $_POST["lastname_employee"];
$em_tel= $_POST["tel_employee"];
$em_address= $_POST["address_employee"];
$em_salary= $_POST["salary_employee"];  

include('connection.php');
$sql = "UPDATE tbl_employee  SET name_employee='$em_Name', lastname_employee='$em_last', tel_employee='$em_tel' , address_employee='$em_address', salary_employee='$em_salary' WHERE id_employee=$em_id";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='ins_form1.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='ins_form1.php'</script>";
}
$conn->close();
?>