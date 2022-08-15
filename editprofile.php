<?php 

  session_start();

  require 'connection.php';

  if(isset($_POST['update'])) {

    $newfname =$_POST['fname'];
    $newlname =$_POST['lname'];
    $newid =$_POST['idnum'];
    $newphone =$_POST['phone'];
    $newaddress =$_POST['address'];
    $newage =$_POST['age'];
    $newemail =$_POST['email'];

    $query = "UPDATE users SET fname = '$newfname', lname = '$newlname', idnum = '$newid', phone = '$newphone' ,adress = '$newaddress',
     age = '$newage'    , email = '$newemail'  WHERE id='".$_SESSION['idnum']."'";

    if($result = mysqli_query($con, $query)) {

    $_SESSION['prompt'] = "פרטיים אישיים עודכנו";
    header("location:userlayout.php");
    exit;

  } else {

    die("שגיאה בניתונים");

  }

}

if(isset($_SESSION['idnum'], $_SESSION['passwords'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editprofile.css">
</head>
<body>
<?php include 'header.php'; ?>
  
    

<section>
    
    <div class="container">
      <strong class="title">עריכת פרטיים אישיים</strong>
    </div>

</body>
</html>


<?php

}
?>