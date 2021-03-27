<?php
include_once 'connection.php'
?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>





 <?php


 


  if ($_SERVER["REQUEST_METHOD"] == "POST") { 


   


$errors = array( ); // Initialize an error array.


   if (empty( $_POST['Fname'])) {
      $errors = array( ); // Initialize an error array.
     
           $errors[] = 'You forgot to enter your first name.';
      } else {
          $Fname = trim( $_POST['Fname']);
      }


    
    if (empty( $_POST['Lname'])) {
          $errors[] = 'You forgot to enter your last name.';
     } else {
         $Lname = trim($_POST['Lname']);
        
      }

 // Check for an email address:
       if (empty($_POST['email'])) {
           $errors[] = 'You forgot to enter your email address.';
      } else {
          $email = trim($_POST['email']);
       }

     
        if (empty($_POST['tel'])) {
           $errors[] = 'You forgot to enter your email address.';
      } else {
          $tel = trim($_POST['tel']);
       }
  if (empty($_POST['address'])) {
           $errors[] = 'You forgot to enter your email address.';
      } else {
          $address = trim($_POST['address']);
       }



 if (!empty($_POST['pass1'])) {
            if($_POST['pass1'] != $_POST['pass2']){
           $errors[] = 'Your password did not match the confirmed password.';
             } else {
                     $pass1 = trim($_POST['pass1']);
              }
                }else{
        $errors[] = 'You forgot to enter your password.';
       }





if (empty($errors)) {

$q = "INSERT INTO  `customer` (FName, LName,  Password, Email,Phone,Address ) VALUES ('$Fname', '$Lname', '$pass1' ,' $email','$tel',' $address' )";



        $r = @mysqli_query ($link, $q); // Run the query.
         if ($r) { // If it ran OK.
 
              // Print a message:
              echo '<h1>Thank you!</h1>
         <p>You are now registered.!</p><p>   
             <br /></p>';   
              header("Location:login_signup.html");?>


            <script> location.replace("login_signup.html") </script>


<?php
         } else { // If it did not run OK.
     
             // Public message:
              echo '<h1>System Error</h1>
              <p >You could not be registered due to a system error. We apologize for
any inconvenience.</p>';
     
           // Debugging message:
             
          } // End of if ($r) IF.
        
          mysqli_close($link); // Close the database connection.

$sql="SELECT * FROM customer WHERE (Email=' $email' AND Password='$pass1' );";



$resulte=mysqli_query($link,$sql)or trigger_error("Query: $sql\n<br />MySQL Error: " . mysqli_error($link));


if (@mysqli_num_rows($resulte) == 1) { // A match was made.

            // Register the values:
            $_SESSION = mysqli_fetch_array ($resulte, MYSQLI_ASSOC); 
            mysqli_free_result($resulte);
            mysqli_close($link);




}

exit( );
        ?>

          

           <?php
       } else { // Report the errors.
      
           echo '<h1>Error!</h1>
           <p >The following error(s) occurred:<br />';
           foreach ($errors as $msg) { // Print each error.
               echo " - $msg<br />\n";
           }
           echo '</p><p>Please try again.</p><p><br /></p>';
          
       } // End of if (empty($errors)) IF.
  
   } // End of the main Submit conditional.
  ?>


</body>
</html>

