<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='index.css'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@300;500&family=Roboto:ital,wght@0,400;0,700;1,100&family=Tajawal:wght@300;400&display=swap" rel="stylesheet">
    
    <title>Shop Online</title>
</head>
<body>

<?php
include('config.php');
$id = $_GET['id'];
$result = mysqli_query($con, "SELECT * FROM shopproduct WHERE id=$id");
$data = mysqli_fetch_array($result);

?>

<center>
    <div class="main">
        <form action="up.php" method="post" enctype="multipart/form-data">
            <h2>تحديث البيانات</h2>
            <input type="text"  name='id' value='<?php echo $data['id']?>'>
            <br>
            <input type="text"  name='name' value='<?php echo $data['name']?>'>
            <br>
            <input type="text"name='price' value='<?php echo $data['price']?>'>
            <br>
            <input type="file" id="file" name='image' style='display:none;'>
            <br>
            <label for="file">تحديث صورة المنتج</label>
         
            <button name='update' type='submit'>تحديث المنتج</button>
            <br><br>
            <a href="products.php">all Products</a>
        </form>
    </div>

    <p>All copy rights for me</p>
</center>
 
</body>
</html>