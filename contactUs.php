<?php

$serever ="localhost";
$username ="root";
$password ="";
$dbname ="product_order";

$con=mysqli_connect($serever,$username,$password,$dbname);
// if(!$con){
//     echo"database not connected";
    
// }
// else{
//     echo"database connected";
// }


//start

$fullname =$_POST['fname'];
$country =$_POST['gmail'];
$state =$_POST['feedback'];



$sql="INSERT INTO `customer_information`(`full_name`, `country`, `state`, `city`, `street`, `postcode`, `phone`, `email`) VALUES ('$fullname','$country','$state','$city','$street','$postcode','$phone','$email')";

$result=mysqli_query($con ,$sql);
    if($result){

        echo "<div id=orderBox><h1>Thanks for order...</h1></div>";
       echo "<script type='text/javascript'>
       alert('Suceesfully order placed');
     </script>";

       
        
        
    }

    else{
        echo "query failed";
    }

   

    

?>