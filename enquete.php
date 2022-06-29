<!DOCTYPE html>
<html>

<head>
    <!-- Meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="all">
    <meta name="language" content="Dutch">
    <meta name="author" content="Ahmed al Hedni">
    <meta name="description" content="">
    <meta name="keywords" content="OPENDAG, ICT">
    <meta name="copyright" content="copyright">

    <!-- CSS link -->
    <link rel="stylesheet" href="style.css">

    <!-- Hamburger link for small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Website title -->
    <title>MBO Utrecht</title>
</head>

<body>
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
    <main>
        <section id="form">
            <h1 id="titel3">Enquête</h1>
            <div id="enquete">
                <div class="container3">
                    <div class="row3">
                        <div class="column8">
                            <form action="./create.php" method="post">
                                <div class="row">
                                    <div class="col-25">
                                        <label for="firstname">Voornaam</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="inputFirstname" name="firstname" placeholder="Vul hier je voornaam in." required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="lastname">Achternaam</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="inputLastname" name="lastname" placeholder="Vul hier je achternaam in." required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="email">E-mail</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="email" id="inputEmail" name="email" placeholder="Vul hier je e-mailadres in." required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="expectation">Voldoet de open dag en de informatie die je hebt ontvangen aan jouw verwachting?</label>
                                    </div>
                                    <div class="col-75">
                                        <select id="inputExpectation" name="expectation" required>
                                            <option value="" disabled selected>Selecteer</option>
                                            <option value="Onvoldoende">Onvoldoende</option>
                                            <option value="Voldoende">Voldoende</option>
                                            <option value="Goed">Goed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="information">Wat vond je van de vakinhoudelijke voorlichting?</label>
                                    </div>
                                    <div class="col-75">
                                        <select id="inputInformation" name="information" required>
                                            <option value="" disabled selected>Selecteer</option>
                                            <option value="Onvoldoende">Onvoldoende</option>
                                            <option value="Voldoende">Voldoende</option>
                                            <option value="Goed">Goed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="conversation">Wat vond je van het gesprek met studenten?</label>
                                    </div>
                                    <div class="col-75">
                                        <select id="inputConversation" name="conversation" required>
                                            <option value="" disabled selected>Selecteer</option>
                                            <option value="Onvoldoende">Onvoldoende</option>
                                            <option value="Voldoende">Voldoende</option>
                                            <option value="Goed">Goed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="ambiance">Heb je de schoolsfeer als positief ervaren?</label>
                                    </div>
                                    <div class="col-75">
                                        <select id="inputAmbiance" name="ambiance" required>
                                            <option value="" disabled selected>Selecteer</option>
                                            <option value="Onvoldoende">Onvoldoende</option>
                                            <option value="Voldoende">Voldoende</option>
                                            <option value="Goed">Goed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="message">Heb je voor ons nog tips of zijn er vragen waar je geen antwoord op hebt gekregen?</label>
                                    </div>
                                    <div class="col-75">
                                        <textarea type="text" id="inputMessage" name="message" style="height:150px"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <input type="submit" value="Verzenden">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="sticky-footer">
            <!-- <h2>Footer Stick to the Bottom</h2> -->
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./overige-info.php">Overige Informatie</a></li>
                <li><a href="./enquete.php">Enquête</a></li>
            </ul>
            <p> © Copyright MBO Utrecht.</p>
        </footer>
        <script src="./nav.js"></script>
</body>

</html>
