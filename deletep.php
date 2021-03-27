
<?php
include_once 'connection.php'
?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>Contact us</title>
    <link rel="stylesheet" type="text/css" href="Styles.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    
   <div class="header">
        <div class="head-container">
            <nav>
                <div class="logo">
                    <img src="Images\Picture1.png" alt="logo" />
                    <h2>MAR</h2>
                </div>
                <ul class="nav-links">
                    <p>

              
                    </p>
               <li> <a href="Homepage.html">Home</a></li>
                    <li>  <a href="Aboutus.html">About us</a></li>
                    <li> <a href="Offers.html">Offers</a></li>
                    
                        <li> <a href="Login_signup.html">Account</a></li>                    
                </ul>

            </nav>
        </div>
    </div>






<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>



    
<?php 
    if (!empty($_POST['PPID'])) {
        $e = mysqli_real_escape_string ($link, $_POST['PPID']);
    } else {
        $e = FALSE;
        echo '<p >You forgot to enter product ID</p>';
    }
    echo   $_POST['PPID'];
    echo $e;



if ($e ) {


$sql="DELETE FROM product WHERE Product_ID='&e'";
  $link->exec($sql);
  echo "Record deleted successfully";
} }

 ?>












    <!--__________Footer__________-->
    <div class="footer">
        <div class="head-container">
            <div class="row">
               
               
                     <div class="card-single">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28569.1104266536!2d50.02
                        0587099070305!3d26.483475355424503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e3600
                                     338a950997%3A0x6fa97b0d810360cd!2z2K3Yr9mK2YLYqSDYp9mE2K3ZitmI2KfZhg!5e0!3m2!1s
                                     r!2ssa!4v1615626745020!5m2!1sar!2ssa" width="550" height="500" style="border:0;" 
                                allowfullscreen="" loading="lazy"></iframe>
                    </div>
                <div class="footer-col4">
                    <ul>
                                         <div class="card-single-contact">
                        <h1>Our Store</h1>
                        <p>
                            P.O. Box 79800, Dammam 31952
                            Kingdom of Saudi Arabia
                        </p>

                        <p><a href="tel:+966500000000"><i class="fa fa-phone-square"> +966 5X-XXX-XXXX</i></a></p>
                        <p><a href="mailto:MAR@gmail.com"><i class="fa fa-envelope-o"> MAR@gmail.com</i></a></p>
                    </div>
                    </ul>

                </div>
                <div class="footer-col4">
                    <h3>Follow us</h3>
                    <ul>
                         <li><img style="width: 38px" src="Images/sxx.jpg"><a href="">Facebook</a></li>
                        <li><img style="width: 30px" src="Images/Twi.png"><a href="">Twitter</a></li>
                        <li><img style="width: 35px" src="Images/is.png"><a href="">Instagram</a></li>
                        <li><img style="width: 35px" src="Images/you.png"><a href="">Youtube</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

</body>
</html>