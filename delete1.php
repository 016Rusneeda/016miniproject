<?php 
 $em_id = $_GET['id_employee'];
include('connection.php');
$sql = "DELETE FROM tbl_employee WHERE id_employee=$em_id";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='ins_form1.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='ins_form1.php'</script>";
}

$conn->close();
?>