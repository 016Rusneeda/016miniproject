<?php 
 $id_pro = $_GET['id_product'];
include('connection.php');
$sql = "DELETE FROM tbl_products WHERE id_product=$id_pro";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='ins_form4.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='ins_form4.php'</script>";
}

$conn->close();
?>