<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>عربة التسوق</title>
    <style>
       main{
        width: 50%;
        margin-top : 30px;
       }
       table{
        box-shadow:2px 2px 15px green;
       }
       thead{
       background-color: #A2FF33;
       color: black;
       text-align:center;

       }
       tbody{
        text-align:center;
       }
       h2{
        color:red;
        margin-right:10px;
            text-decoration: none;
            
       }
    


        </style>
</head>
<body>
    <center>
    <h2>
        طلباتي
    </h2>
    </center>
   <?php
   include('config.php');
   session_start();
   $result = mysqli_query($con, "SELECT * FROM addcard");
   while($row = mysqli_fetch_array($result)){
    echo "

    <center>
    <main>
        <table class='table'>
         <thead>
            <tr>
                <th scope='col'>name product</th>
                <th scope='col'>price product</th>
                <th scope='col'>delete product</th>
</tr>
         </thead>
         <tbody>
            <tr>
                <td>$row[name]</td>
                <td>$row[price]</td>
                <td><a href='del.php? id=$row[id]' class='btn btn-danger'>ازالة</a></td>
            </tr>
</tbody>
        </table>
    </main>
</center>

    "
   ;}
   ?>
   <center><a href="checkout.php">الرجوع الى صفحة المنتجات</a></center>
</body>
</html>