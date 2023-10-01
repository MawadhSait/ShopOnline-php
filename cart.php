<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@300;500&family=Roboto:ital,wght@0,400;0,700;1,100&family=Tajawal:wght@300;400&display=swap" rel="stylesheet">
    
    <title>My Cart</title>
</head>
<style>
    h3{
        font-family: 'Tajawal',sans-serif;
        font-weight: bold;
    }
    main{
        width:40%;
        margin-top:30px;
    }
    table{
        box-shadow: 1px 1px 10px silver;
    }
    thead{
        background-color: #3498DB;
        color:white;
        text-align:center;
    }
    tbody{
        text-align:center;
    }
</style>
<body>
    <center>
    <h3> منتجاتك المحجوزة</h3>
    </center>

<?php
 include('config.php');

$result = mysqli_query($con,"SELECT * FROM addcart");


while($row = mysqli_fetch_array($result)){

    echo "
 
 <center>
    <main>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>prodeuct name</th>
                    <th scope='col'>product price</th>
                    <th scope='col'>Delete product</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$row[name]</td>
                    <td>$row[price]</td>
                    <td><a href='deleteCart.php? id=$row[id]' class='btn btn-danger'>إزالة</a></td>
                </tr>
            </tbody>
        </table>
    </main>
</center>
 
 ";
}
 ?>

<center>
    <a href="shop.php">الرجوع للصفحة الرئيسية</a>
</center>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>