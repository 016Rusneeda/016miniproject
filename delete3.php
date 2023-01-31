<?php 
 $sale = $_GET['id_sale'];
include('connection.php');
$sql = "DELETE FROM tbl_sale WHERE id_sale=$sale";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='ins_form3.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='ins_form3.php'</script>";
}

$conn->close();
?>