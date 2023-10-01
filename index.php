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

<center>
    <div class="main">
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <h2>موقع تسويقي أونلاين</h2>
            <img src="logo.jpg" alt=""width="450px">
            <br>
            <input type="text"  name='name'>
            <br>
            <input type="text"name='price'>
            <br>
            <input type="file" id="file" name='image' style='display:none;'>
            <br>
            <label for="file">اختيار صورة المنتج</label>
         
            <button name='uplode'>رفع المنتج</button>
            <br><br>
            <a href="products.php">all Products</a>
        </form>
    </div>
</center>
    <p>All copy rights for me</p>
</body>
</html>