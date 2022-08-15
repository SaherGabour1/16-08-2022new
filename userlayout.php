<?php



session_start();

require 'connection.php';


if(isset($_SESSION['idnum'], $_SESSION['passwords'])) {


                            

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userlayout.css">


   
</head>
<body>
<?php include 'header.php'; ?>

        <section>
        <div class="container">
         <strong class="title">פרטיים אישיים</strong>
        </div>
    
    
        <div class="profile-box box-left">

      <?php

       

          echo "<div class='info2'><strong>טלפון:</strong> <span> $newphone</span></div>";
          echo "<div class='info0'><strong>ת''ז:</strong> <span>$newidnum</span></div>";
          echo "<div class='info1'><span> $newfname $newlname</span><strong>  :שם מלא</strong> </div>";
          echo "<div class='info3'> <span> $newemail</span> <strong> :דואר אלקטרוני</strong></div>";
          echo "<div class='info4'> <span> $newcity</span> <strong> : יישוב</strong> </div>";
          echo "<div class='info5'><strong> גיל :</strong> <span> $newage</span></div>";
          
      ?>
      <br>
      <br>
      <br>
      
      <div class="options">
        <a class="btn2" href="/">עריכת פרטיים אישיים</a>
        <a class="btn1" href="resetpasswords.html">עדכון סיסמא</a>
        
      </div>

      
    </div>

  </section>




  
<footer class="footer-copyright">
            <h5>
            זכויות יוצרים שמורות ל- נביה בולוס ו- סאהר גבור &copy;  
            </h5>
       </footer> 
    
   

    </div>

        
    
</body>
</html>

<?php

}
?>


