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
            <h1>Facilitez les échanges entre laboratoires et praticiens</h1>
            <p>Prenez facilement rendez-vous avec nos représentants GSB pour commander des médicaments et obtenir des informations détaillées.</p>
            <div class="search-bar">
                <input type="text" placeholder="Nom du laboratoire" />
                <input type="text" placeholder="Praticien spécialisé" />
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
                    <p>Accédez à un large choix de représentants GSB pour vos commandes de médicaments.</p>
                </div>
                <div class="card">
                    <h3>Suivi des commandes</h3>
                    <p>Suivez l'avancement de vos commandes de médicaments en temps réel.</p>
                </div>
                <div class="card">
                    <h3>Plateforme sécurisée</h3>
                    <p>Vos données et commandes sont protégées avec les meilleurs standards de sécurité.</p>
                </div>
            </div>
        </section>

        <!-- Section Statistiques -->
        <section class="statistics">
            <h2>Nos Chiffres Clés</h2>
            <div class="stats">
                <div class="stat">
                    <h3>500+</h3>
                    <p>Praticiens inscrits</p>
                </div>
                <div class="stat">
                    <h3>2000+</h3>
                    <p>Commandes réservées chaque mois</p>
                </div>
                <div class="stat">
                    <h3>98%</h3>
                    <p>Taux de satisfaction des praticiens</p>
                </div>
            </div>
        </section>

        <!-- Appel à l'Action -->
        <section class="cta">
            <h2>Prêt à commander vos médicaments ?</h2>
            <p>Rejoignez des milliers de praticiens qui bénéficient déjà de nos services pour commander des médicaments facilement.</p>
            <button>Prendre un rendez-vous</button>
        </section>
    </main>

    <?php include '../partials/footer.php'; ?>
</body>

</html>
    