<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>France Montagnes</title>
</head>
<body id="home">
    <header>
        <img class="logo" src="./asset/logo.png" alt="logo">
        <nav class="menu">
            <ul id="navbar">
                <li class="active" ><a href="#">GUIDE DES STATIONS</a></li>
                <li><a href="#">MAGAZINE</a></li>
                <li><a href="#guides">INFO LIVE</a></li>
                <li><a href="#reser">RESERVATION</a></li>
                <!-- <li><a href="#"><i class="loop"></a></li> -->
            </ul>
        </nav>
        <div class="container"></div>
    </header>
    <main>
        <div class="banner" role="banner" id="top">
            <img src="./asset/famille-hiver-neige-ambiance-311.jpg" alt="image">
            <h1>Vacances à la Montagne</h1>
        </div>
        <hr>
        <h1 id="guides">
            Guide des stations
        </h1>

        <section class="grille">
            <?php
                include_once('./src/bdd.inc.php');
            ?>
        </section>

    </main>
    <footer id="reser">
        <h2>
            Résérvations
        </h2>
        <ul>
            <li>Paris</li>
            <li>Phone +33 07 11 24 33 00</li>
            <li>Email: mail@gmail.com</li>
            <li><a href="#">Retour à l'acueil</a></li>
        </ul>
        <p>MIT <?php print date('Y'); ?></p>
    </footer>
    <script src="./js/app.js"></script>
</body>
</html>