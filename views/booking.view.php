<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prendre RDV - GSB Prise de RDV</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/booking.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/footer.css">
</head>
<body>
    <?php 
    include '../partials/header.php';
    ?>

    <main>
        <section class="services-section">
            <h1>Explorez Nos Services pour Praticiens</h1>
            <p>Choisissez parmi nos services pour prendre rendez-vous avec nos représentants GSB et commander des médicaments.</p>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-image" style="background-image: url('images/consultation-laboratory.jpg');"></div>
                    <h3>Commande de Médicaments</h3>
                    <p>Prendre un rendez-vous pour discuter de vos besoins en médicaments.</p>
                </div>
                <div class="service-card">
                    <div class="service-image" style="background-image: url('images/medicines-consultation.jpg');"></div>
                    <h3>Consultation sur les Médicaments</h3>
                    <p>Obtenez des informations détaillées sur les médicaments et leurs utilisations.</p>
                </div>
                <div class="service-card">
                    <div class="service-image" style="background-image: url('images/new-products.jpg');"></div>
                    <h3>Produits Nouveaux</h3>
                    <p>Rencontrez un représentant pour explorer nos nouveaux produits et leur efficacité.</p>
                </div>
            </div>
            <button class="btn-primary">Voir Tous les Services →</button>
        </section>

        <section class="why-choose-us">
            <h2>Pourquoi Choisir GSB ?</h2>
            <div class="why-grid">
                <div class="why-card">
                    <h3>Experts en Médicaments</h3>
                    <p>Nos représentants sont des experts dans les domaines pharmaceutiques et sont là pour vous aider à chaque étape.</p>
                </div>
                <div class="why-card">
                    <h3>Accessibilité 24/7</h3>
                    <p>Prendre rendez-vous à tout moment de la journée, où que vous soyez.</p>
                </div>
                <div class="why-card">
                    <h3>Réservation Facile</h3>
                    <p>Réservez un rendez-vous pour commander des médicaments en quelques clics.</p>
                </div>
            </div>
        </section>

        <!-- Section Appel à l'Action -->
        <section class="cta-section">
            <h2>Prêt à Commander ?</h2>
            <p>Réservez votre rendez-vous avec nos représentants GSB et obtenez les médicaments dont vous avez besoin.</p>
            <a href="reservation.html" class="btn-primary">Réservez Maintenant →</a>
        </section>
    </main>

    <?php 
    include '../partials/footer.php';
    ?>
</body>
</html>
