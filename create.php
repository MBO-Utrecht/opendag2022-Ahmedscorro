<?php  

    // We maken contact met de mysql-database
    include("connect_db.php");

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $expectation = $_POST["expectation"];
    $information = $_POST["information"];
    $conversation = $_POST["conversation"];
    $ambiance = $_POST["ambiance"];
    $message = $_POST["message"];

    $sql =  "INSERT INTO `feedback` (`id`, 
                                       `firstname`,
                                       `lastname`,
                                       `email`,
                                       `expectation`,
                                       `information`,
                                       `conversation`,
                                       `ambiance`,
                                       `message`)
                    VALUES 			  (NULL, 
                                       '$firstname',
                                       '$lastname',
                                       '$email',
                                       '$expectation',
                                       '$information',
                                       '$conversation',
                                       '$ambiance',
                                       '$message');";

  mysqli_query($conn, $sql);

  // Met een Header functie wordt je direct doorgestuurd naar een andere pagina

  $message1 = "<h3 class='notif_message1'>Bedankt voor je feedback.<br> We hopen je gauw terug te zien als student!</h3>";
  
  $message2 = "<h3 class='notif_message2'>Wacht a.u.b. tot de pagina wordt vernieuwd.</h3>";
  header("Refresh:4; url=./read.php");
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
   <!-- css bestand -->
   <link rel="stylesheet" href="style.css">

    <title>MBO Utrecht</title>
  </head>
  <body class="create">
    <?php echo $message1, $message2; ?>

  </body>
</html>
