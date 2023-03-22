<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update </title>
</head>
<body>
    <?php
    include('config.php');
    $ID=$_GET['id'];
    $up = mysqli_query($con," SELECT * FROM prod where id=$ID");
    $data = mysqli_fetch_array($up);
    
    ?>
    <center>

    <div class="main">
        <form action=" up.php"method="post" enctype="multipart/form-data">
           

        <h2>تعديل المنتجات</h2>
        <input type="text" name='id' value= '<?php echo $data ['id'] ?>'>
        <br>
        <input type="text" name='name' value= '<?php echo $data ['name'] ?>' >
        <br>
        <input type="text"name='price' value= '<?php echo $data ['price'] ?>'>
        <br>
        <input type="file" id="file" name='imge' style= 'display:none;'>
        <label for="file">تحديث صورة المنتج</label>
        <button name='update' type='submit'>تعديل المنتج</button>
        <br>
        <a href="order.php">عرض المنتجات</a>
        


        </form>
    </div>
    



</center>
</body>
</html>