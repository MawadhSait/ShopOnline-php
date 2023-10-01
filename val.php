<?php
include('config.php');

$id = $_GET['id'];
$up = mysqli_query($con, "SELECT * FROM shopproduct WHERE id=$id");
$data = mysqli_fetch_array($up);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@300;500&family=Roboto:ital,wght@0,400;0,700;1,100&family=Tajawal:wght@300;400&display=swap" rel="stylesheet">
    
    <title>Validate cart</title>
</head>
<style>
    input{
        display:none;
    }
    .main{
        width:30%;
        padding:20px;
        box-shadow:1px 1px 10px silver;
        margin-top:50px;
    }
 
</style>
<body>

    <center>
        <div class="main">
       
            <form action="insert_cart.php" method="post" >
                <h3>هل فعلاً تريد إضافة المنتج للعربة </h3>
                <input type="text" name="id" value='<?php echo $data['id'] ?>'>
                <input type="text" name="name" value='<?php echo $data['name'] ?>'>
                <input type="text" name="price" value='<?php echo $data['price'] ?>'>
                <button name="add" class="btn btn-warning" > تأكيد شراء المنتج</button>
            </form>
            <br>
            <a href="shop.php">الرجوع للصفحة الرئيسية</a>
        </div>
    </center>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>