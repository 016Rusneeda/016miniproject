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
        <a href="index.php" class="btn btn-primary mt-3">Go Back</a>
        <hr>
        <h1 class="mt-5">เพิ่มข้อมูล</h1>
        <hr>
        
<div class="mb-3">
<form  action="create.php" method="post">
            <div class="mb-3">
                <label for="S_Name" class="form-label">Name</label>
                <input type="text" class="form-control" name="S_Name" required>
            </div>
            <div class="mb-3">
                <label for="S_LastName" class="form-label">LastName</label>
                <input type="text" class="form-control" name="S_LastName" required>
            </div>
            <div class="mb-3">
                <label for="S_Address">Address</label>
                <input type="S_Address" class="form-control" name="S_Address" required>
            </div>
            <div class="mb-3">
                <label for="S_SunjectName">SunjectName</label>
                <input type="text" class="form-control" name="S_SunjectName" required>
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
<th>Name</th>
<th>LastName</th>
<th>Address</th>
<th>SunjectName</th>
<th>Action</th>


</tr>
</thead>
<tbody>
<?php
include('connection.php');
$sql = "SELECT * FROM tbl_customers";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
//แสดงข้อมูลเป็นตาราง
while($row = $result->fetch_assoc()) {

echo '<tr>';
echo '<td>'. $row['c_no'] . '</td>';
echo '<td>'. $row['S_Name'] . '</td>';
echo '<td>'. $row['S_LastName'] . '</td>';
echo '<td>'. $row['S_Address'] . '</td>';
echo '<td>'. $row['S_SunjectName'] . '</td>';
echo '<td><a role="button"  href="update.php?c_no='.$row['c_no'].'" class="btn btn-warning">Update</a> ';  //ปุ่มที่เพิ่มเข้ามา
    echo '<a href="delete.php?c_no='.$row['c_no'].'" class="btn btn-danger">delete</a>';  //ปุ่มที่เพิ่มเข้ามา
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