<?php

include('config.php');
if(isset($_POST['update'])){
    $ID = $_POST['id'];
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMGE = $_FILES['imge'];
    $imge_location = $_FILES['imge']['tmp_name'];
    $imge_name = $_FILES['imge']['name'];
    $imge_up = "imges/".$imge_name;
    $update = "UPDATE prod SET name='$NAME',price='$PRICE', imge='$imge_up' where id=$ID ";
    mysqli_query($con, $update);
    if(move_uploaded_file($imge_location,'imges/'.$imge_name)){

        echo"<script>alert('تم تحديث المنتج بنجاح');</script>";

    }else{
        echo "script>alert('حدث خطا');</script>";
    }

    header('location: index.php');
    
 
}



?>