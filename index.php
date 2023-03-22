<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>shope onlaine </title>

</head>
<body>
    
    <center>
    <script>const d = new Date();</script>

    <div class="main">
        <form action="insert.php"method="post" enctype="multipart/form-data">
           

        <h2>متجر الكتروني</h2>
        <img src="logo.jpg" alt="logo" width="400px">
        <input type="text" name='name'>
        <br>
        <input type="text"name='price'>
        <br>
        <input type="file" id="file" name='imge' style= 'display:none;'>
        <label for="file">اختيار صورة للمنتج</label>
        <button name='upload'>رفع المنتج</button>
        <br>
        <a href="order.php">عرض المنتجات</a>
        <br>
        <a href="login-admin.php">تسجيل الدخول</a>
        <br>
        <a href="logout.php">تسجيل الخروج</a>
        
        </form>
        
    </div>
    



</center>

</body>
</html>