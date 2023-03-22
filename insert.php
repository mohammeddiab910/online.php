<?php

include('config.php');
if(isset($_POST['upload'])){
 
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMGE = $_FILES['imge'];
    $imge_location = $_FILES['imge']['tmp_name'];
    $imge_name = $_FILES['imge']['name'];
    $imge_up = "imges/".$imge_name;
    $insert = "INSERT INTO prod(name , price , imge) values ('$NAME','$PRICE','$imge_up')";
    mysqli_query($con, $insert);
    if(move_uploaded_file($imge_location,'imges/'.$imge_name)){

        echo"<script>alert('تم رفع المنتج بنجاح')</script>";

    }else{
        echo "script>alert('حدث خطا لم يتم رفع المنتج')</script>";
    }

    header('location: index.php');
    
 
}



?>