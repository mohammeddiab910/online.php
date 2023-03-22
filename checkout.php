<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        h3{
            font-family: 'cairo', sans-serif;
            font-weight: bold;
            color: red;
        }
        .card{
            float: right;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px;
        }
        .card img{
            width: 100%;
            height: 200px;
        }
        main{
            width: 60%;

        }
        #aa{
            margin-right:1100px;
            text-decoration: none;
            color:red;
        }
        #a{
            margin-right:10px;
            text-decoration: none;
            color:red;
        }
       
    </style>
    <title>المنتجات</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
    <a id="a"href="logout.php">تسجيل خروج</a>
        <a id="aa" href="myorder.php">طلباتي</a>
      

    </nav>
    <center>
        <h3 id="b">المنتجات المتوفرة</h3>
    </center>
    <?php

    include('config.php');
    session_start();
    $result = mysqli_query($con,"SELECT * FROM prod");
    while($row = mysqli_fetch_array($result)){
        echo "
    <center>
    <main>


    
    <div class='card' style='width: 15rem;'>
  <img src='$row[imge]' class='card-img-top' >
  <div class='card-body'>
    <h5 class='card-title'>$row[name]</h5>
    <p class='card-text'>$row[price]</p>
    <a href='complete.php? id=$row[id]' class='btn btn-success'>اضافة المنتج للعربة</a>
  </div>
</div>
</main>

    </center>
   ";}

    ?>
    





   
    


    
</body>
</html>

