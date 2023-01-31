<?php
$id_pro = $_GET["id_product"];
$name_pro =$_POST["name_product"];   
$type_pro =$_POST["type_product"];
$price_pro =$_POST["price_product"];  

include('connection.php');
$sql = "UPDATE tbl_products SET name_product='$name_pro', type_product='$type_pro', price_product='$price_pro'  WHERE id_product=$id_pro";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='ins_form4.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='ins_form4.php'</script>";
}
$conn->close();
?>