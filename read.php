<?php
// We maken contact met de mysql-database.
include("connect_db.php");

// We maken met de taal SQL een select-query, deze selecteert alle records uit de tabel
$sql = "SELECT * FROM `feedback`";

// De functie mysqli_query() haalt het resultaat van de query op uit de database en zet het in $result
$result = mysqli_query($conn, $sql);


// De functie mysqli_fetch_assoc() maakt van de waarde in $result een associatief array
$row = "";
while ($record = mysqli_fetch_assoc($result)){
    $row = $row . "<tr>
    <td>{$record['id']}</td>
    <td>{$record['firstname']}</td>
    <td>{$record['lastname']}</td>
    <td>{$record['email']}</td>
    <td>{$record['expectation']}</td>
    <td>{$record['information']}</td>
    <td>{$record['conversation']}</td>
    <td>{$record['ambiance']}</td>
    <td>{$record['message']}</td>
    <td>
    <a href='./update.php?id={$record['id']}'>
        <i class='bi bi-pencil-square'></i>
        </a>
    </td>
    <td>
    <a href='./delete.php?id={$record['id']}'>
        <i class='bi bi-trash-fill'></i>
        </a>
      </td>
    </tr>";
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css bestand -->
    <link rel="stylesheet" href="style.css">


    <!-- Hamburger link for small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>MBO Utrecht</title>
</head>

<body class="read">
    <div class="topnav">
        <img src="https://www.mboutrecht.nl/wp-content/themes/mboutrecht/img/output/logo-new@2x.png" class="responsive">
        <div class="topnav" id="myTopnav">
            <ul>
                <a href="./index.php">Home</a>
                <a href="./overige-info.php">Overige Informatie</a>
                <a href="./enquete.php">Enquête </a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
            </ul>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--- De tabel met gegevens uit de database --->
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Voornaam</th>
                            <th>Achternaam</th>
                            <th>E-mail</th>
                            <th>Feedback (verwachting)</th>
                            <th>Feedback (voorlichting)</th>
                            <th>Feedback (gesprekken)</th>
                            <th>Feedback (schoolsfeer)</th>
                            <th>Extra informatie</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo $row; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="nav.js"></script>
</body>

</html>