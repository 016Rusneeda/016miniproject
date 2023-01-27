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
        <h1 class="mt-5">เพิ่มข้อมูล</h1>
        <hr>
        
<div class="mb-3">
<form  action="create1.php" method="post">
            <div class="mb-3">
                <label for="name_employee" class="form-label">Name</label>
                <input type="text" class="form-control" name="name_employee" required>
            </div>

            <div class="mb-3">
                <label for="lastname_employee" class="form-label">LastName</label>
                <input type="text" class="form-control" name="lastname_employee" required>
            </div>

            <div class="mb-3">
                <label for="tel_employee">Tel.</label>
                <input type="tel_employee" class="form-control" name="tel_employee" required>
            </div>

            <div class="mb-3">
                <label for="address_employee">Address</label>
                <input type="text" class="form-control" name="address_employee" required>
            </div>

            <div class="mb-3">
                <label for="salary_employee">Salary</label>
                <input type="salary_employee" class="form-control" name="salary_employee" required>
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
<th>Tel</th>
<th>Address</th>
<th>Salary</th>
<th>Action</th>


</tr>
</thead>
<tbody>
<?php
include('connection.php');
$sql = "SELECT * FROM tbl_employee";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
//แสดงข้อมูลเป็นตาราง
while($row = $result->fetch_assoc()) {

echo '<tr>';
echo '<td>'. $row['id_employee'] . '</td>';
echo '<td>'. $row['name_employee'] . '</td>';
echo '<td>'. $row['lastname_employee'] . '</td>';
echo '<td>'. $row['tel_employee'] . '</td>';
echo '<td>'. $row['address_employee'] . '</td>';
echo '<td>'. $row['salary_employee'] . '</td>';

echo '<td><a role="button"  href="update1.php?id_employee='.$row['id_employee'].'" class="btn btn-warning">Update</a> ';  //ปุ่มที่เพิ่มเข้ามา
    echo '<a href="delete1.php?id_employee='.$row['id_employee'].'" class="btn btn-danger">delete</a>';  //ปุ่มที่เพิ่มเข้ามา
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