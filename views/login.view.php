<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - GSB Prise de RDV</title>
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/footer.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">GSB</div>
            <a href="index.html">Accueil</a>
        </nav>
    </header>                       
    <main>
        <section class="login">
            <h1>Connexion</h1>
            <form action="process_login.php" method="POST">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>

                <button type="submit" class="btn">Se connecter</button>
            </form>
            <p>Pas encore inscrit ? <a href="register.html">Créer un compte</a></p>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 GSB - Tous droits réservés.</p>
    </footer>
</body>
</html>
