<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        
        <hr>
        <h1 class="mt-5">เพิ่มข้อมูลสินค้า</h1>
        <hr>
        
<div class="mb-3">
<form  action="create4.php" method="post">
            <div class="mb-3">
                <label for="name_product" class="form-label">Name Product</label>
                <input type="text" class="form-control" name="name_product" required>
            </div>

            <div class="mb-3">
                <label for="type_product" class="form-label">Type</label>
                <input type="text" class="form-control" name="type_product" required>
            </div>

            <div class="mb-3">
                <label for="price_product">Price</label>
                <input type="price_product" class="form-control" name="price_product" required>
            </div>


            <button type="submit">Create</button>
            <a class="btn" href="index.php">Back</a>
            </form>
            </div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
<table id="mytable" class="table table-bordered table-striped">
        <thead>


<tr>
<th>no</th>
<th>Name Product</th>
<th>Type</th>
<th>Price</th>
<th>Action</th>


</tr>
</thead>
<tbody>
<?php
include('connection.php');
$sql = "SELECT * FROM tbl_products";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
//แสดงข้อมูลเป็นตาราง
while($row = $result->fetch_assoc()) {

echo '<tr>';
echo '<td>'. $row['id_product'] . '</td>';
echo '<td>'. $row['name_product'] . '</td>';
echo '<td>'. $row['type_product'] . '</td>';
echo '<td>'. $row['price_product'] . '</td>';



echo '<td><a role="button"  href="update4.php?id_product='.$row['id_product'].'" class="btn btn-warning">Update</a> ';  //ปุ่มที่เพิ่มเข้ามา
    echo '<a href="delete4.php?id_product='.$row['id_product'].'" class="btn btn-danger">delete</a>';  //ปุ่มที่เพิ่มเข้ามา
echo '</tr>';
}
} else {
echo " ";
}
$conn->close();
?>
</tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
</html>