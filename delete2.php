<?php 
 $type_id = $_GET['id_type'];
include('connection.php');
$sql = "DELETE FROM tbl_type_product WHERE id_type=$type_id";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='ins_form2.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='ins_form2.php'</script>";
}

$conn->close();
?>