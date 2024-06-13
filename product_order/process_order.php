<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order place page</title>
</head>
<body>


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

$fullname =$_POST['fullName'];
$country =$_POST['country'];
$state =$_POST['state'];
$city =$_POST['city'];
$street =$_POST['street'];
$postcode =$_POST['postcode'];
$phone  =$_POST['phone'];
$email =$_POST['email'];


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
    <style>

        body{
          
            display:flex;
            height:100%;
            align-items:center;
            justify-content: center;
        }
        #orderBox{
          
          display:flex;
          justify-content:center;
          align-items:center;
        
        }
        h1{
            color:green;
            
        }

    </style>


    
</body>
</html>





