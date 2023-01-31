<?php
$sale = $_GET["id_sale"];
$product =$_POST["product"];  
$vat =$_POST["vat"];  
$date =$_POST["date_sale"];
$price =$_POST["totolprice"];  

include('connection.php');
$sql = "UPDATE tbl_sale  SET product='$product', vat='$vat', date_sale='$date' , totolprice='$price' WHERE id_sale=$sale";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='ins_form3.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='ins_form3.php'</script>";
}
$conn->close();
?>