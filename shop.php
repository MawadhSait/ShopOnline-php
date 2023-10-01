<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@300;500&family=Roboto:ital,wght@0,400;0,700;1,100&family=Tajawal:wght@300;400&display=swap" rel="stylesheet">
    
    <title>Shop Online</title>
</head>
<style>
    body{
        margin-top:10px;
        margin-bottom:100px;
    }
center{
    font-family:  'Tajawal',sans-serif;
    font-weight: bold;
    font-size:15px;
}
.card{
    float:right;
    margin-top:20px;
    margin-left:10px;
    margin-right:10px;

}
.card img{
    width:100%;
    height:200px;
}
.main{
    width:60%;

}
a{
    text-decoration:none;
}
.navbar-brand{
    margin-left:70px;
    color: white;
}
</style>
<body>
<nav class="navbar navbar-dark bg-dark">
<a class="navbar-brand" href="cart.php">عربتي | mycart</a>
</nav>
<center>
<h3> all produts | جميع المنتجات</h3>
</center>
  
<?php
include('config.php');
$result = mysqli_query($con, "SELECT * FROM shopproduct");
while($row = mysqli_fetch_array($result)){
    echo"
    <center>
    

    <div class='main'>
    
         <div class='card' style='width: 18rem;'>
         <img src='$row[image]' class='card-img-top' alt='...'>
         <div class='card-body'>
            <h5 class='card-title'>$row[name]</h5>
            <p class='card-text'>$row[price]</p>
            <a href='val.php? id=$row[id]' class='btn btn-success'>أضافة لعربة التسوق</a>
         </div>
        </div>
    </div>
    </center>

    ";
}


?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>