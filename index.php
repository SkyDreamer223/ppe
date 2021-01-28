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
                <li><a href="#reser">RÉSERVATION</a></li>
                <li><a href="#"><img src="./asset/loop.png" alt="rechercher"></a></li>
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
            Réservations
        </h2>
        <ul>
            <li><i class="fas fa-map-marker"></i> Paris</li>
            <li><i class="fas fa-phone"></i> Phone: +33 07 11 24 33 00</li>
            <li><i class="fas fa-envelope"></i> Email: mail@gmail.com</li>
            <li><a href="#"><i class="fas fa-sort-up"></i> Retour à l'accueil</a></li>
        </ul>
        <p>&copy; Design by MIT <?php print date('Y'); ?></p>
    </footer>
    <script src="./js/app.js"></script>
    <script src="https://kit.fontawesome.com/1b981478ef.js" crossorigin="anonymous"></script>
</body>
</html>