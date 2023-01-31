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
        <h1 class="mt-5">เพิ่มข้อมูลการขาย</h1>
        <hr>
        
<div class="mb-3">
<form  action="create3.php" method="post">
            <div class="mb-3">
                <label for="product" class="form-label">Name Product</label>
                <input type="text" class="form-control" name="product" required>
            </div>

            <div class="mb-3">
                <label for="vat" class="form-label">Vat</label>
                <input type="text" class="form-control" name="vat" required>
            </div>

            <div class="mb-3">
                <label for="date_sale">Date</label>
                <input type="date" class="form-control" name="date_sale" required>
            </div>

            <div class="mb-3">
                <label for="totolprice">Price</label>
                <input type="text" class="form-control" name="totolprice" required>
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
<th>Vat</th>
<th>Data</th>
<th>Price</th>
<th>Action</th>


</tr>
</thead>
<tbody>
<?php
include('connection.php');
$sql = "SELECT * FROM tbl_sale";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
//แสดงข้อมูลเป็นตาราง
while($row = $result->fetch_assoc()) {

echo '<tr>';
echo '<td>'. $row['id_sale'] . '</td>';
echo '<td>'. $row['product'] . '</td>';
echo '<td>'. $row['vat'] . '</td>';
echo '<td>'. $row['date_sale'] . '</td>';
echo '<td>'. $row['totolprice'] . '</td>';


echo '<td><a role="button"  href="update3.php?id_sale='.$row['id_sale'].'" class="btn btn-warning">Update</a> ';  //ปุ่มที่เพิ่มเข้ามา
    echo '<a href="delete3.php?id_sale='.$row['id_sale'].'" class="btn btn-danger">delete</a>';  //ปุ่มที่เพิ่มเข้ามา
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