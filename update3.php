<?php 
    session_start();
    include('connection.php');
    $sale = $_GET['id_sale'];
    $sql = "select * from tbl_sale where id_sale='$sale'";
    $result = $conn->query($sql);
    
    $row;
    
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['id_sale'] = $sale;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Customer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-3">แก้ไขข้อมูลการขาย</h1>
        <hr>
        
        <form action="upd_save3.php?id_sale=<?=$_GET["id_sale"];?>"   method="POST">
            <label for="fname" class="form-label">Name product</label>
            <input class="form-control" type="text" name="product" value="<?php echo $row['product']; ?>">
            <label for="lname" class="form-label">Vat</label>
            <input class="form-control" type="text"  name="vat" value="<?php echo $row['vat']; ?>">
            <label for="address" class="form-label">Date</label>
            <input class="form-control" type="text" name="date_sale" value="<?php echo $row['date_sale']; ?>">
            <label for="subjectname" class="form-label">Price</label>
            <input class="form-control" type="text" name="totolprice" value="<?php echo $row['totolprice']; ?>">
            <input class="btn btn-success mt-3" type="submit" value="Update">
            <a href="ins_form3.php" class="btn btn-primary mt-3">Go Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>