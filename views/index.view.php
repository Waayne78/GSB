<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - GSB Prise de RDV</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
</head>

<body>
    <?php include '../partials/header.php'; ?>

    <main>
        <section class="hero">
            <div class="hero-content">
                <div class="text-content">
                    <h1>Vivez en meilleure santé</h1>
                    <p>Facilitez vos démarches médicales avec notre plateforme rapide et intuitive.</p>
                    <div class="search-bar">
                        <input type="text" placeholder="Nom, spécialité, établissement..." />
                        <input type="text" placeholder="Où ?" />
                        <button>Rechercher</button>
                    </div>
                </div>

            </div>
        </section>

        <section class="features">
            <h2>Nos Services</h2>
            <div class="cards">
                <div class="card">
                    <h3>Réservez facilement</h3>
                    <p>Accédez à un large choix de médecins et horaires disponibles.</p>
                </div>
                <div class="card">
                    <h3>Suivi des rendez-vous</h3>
                    <p>Consultez et gérez vos rendez-vous en un clic.</p>
                </div>
                <div class="card">
                    <h3>Plateforme sécurisée</h3>
                    <p>Vos données sont protégées avec les meilleurs standards.</p>
                </div>
            </div>
        </section>

        <!-- Section Statistiques -->
        <section class="statistics">
            <h2>Nos Chiffres Clés</h2>
            <div class="stats">
                <div class="stat">
                    <h3>500+</h3>
                    <p>Médecins inscrits</p>
                </div>
                <div class="stat">
                    <h3>2000+</h3>
                    <p>Rendez-vous réservés chaque mois</p>
                </div>
                <div class="stat">
                    <h3>98%</h3>
                    <p>Taux de satisfaction des utilisateurs</p>
                </div>
            </div>
        </section>

        <!-- Appel à l'Action -->
        <section class="cta">
            <h2>Prêt à prendre rendez-vous ?</h2>
            <p>Rejoignez des milliers d'utilisateurs satisfaits et prenez votre rendez-vous médical dès aujourd'hui.</p>
            <button>Prendre un rendez-vous</button>
        </section>
    </main>

    <?php include '../partials/footer.php'; ?>
</body>

</html>
