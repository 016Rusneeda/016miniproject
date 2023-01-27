<?php
$type_id = $_GET["id_type"];
$type_Name= $_POST["name_type"];
  

include('connection.php');
$sql = "UPDATE tbl_type_product  SET name_type='$type_Name' WHERE id_type=$type_id";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='index.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='index.php'</script>";
}
$conn->close();
?>