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
        <!-- Section Services -->
        <section class="services-section">
            <h1>Explorez Nos Services Médicaux</h1>
            <p>Choisissez parmi notre gamme de services spécialisés pour prendre rendez-vous avec nos experts médicaux.</p>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-image" style="background-image: url('images/general-consultation.jpg');"></div>
                    <h3>Consultation Générale</h3>
                </div>
                <div class="service-card">
                    <div class="service-image" style="background-image: url('images/pediatrics.jpg');"></div>
                    <h3>Pédiatrie</h3>
                </div>
                <div class="service-card">
                    <div class="service-image" style="background-image: url('images/cardiology.jpg');"></div>
                    <h3>Cardiologie</h3>
                </div>
                <div class="service-card">
                    <div class="service-image" style="background-image: url('images/dermatology.jpg');"></div>
                    <h3>Dermatologie</h3>
                </div>
                <div class="service-card">
                    <div class="service-image" style="background-image: url('images/orthopedics.jpg');"></div>
                    <h3>Orthopédie</h3>
                </div>
                <div class="service-card">
                    <div class="service-image" style="background-image: url('images/psychiatry.jpg');"></div>
                    <h3>Psychiatrie</h3>
                </div>
            </div>
            <button class="btn-primary">Voir Tous les Services →</button>
        </section>

        <!-- Section Pourquoi Choisir Nos Services -->
        <section class="why-choose-us">
            <h2>Pourquoi Choisir Notre Service ?</h2>
            <div class="why-grid">
                <div class="why-card">
                    <h3>Experts Médicaux</h3>
                    <p>Nos médecins sont des professionnels qualifiés et expérimentés dans leur domaine.</p>
                </div>
                <div class="why-card">
                    <h3>Accessibilité 24/7</h3>
                    <p>Prendre rendez-vous à tout moment de la journée, où que vous soyez.</p>
                </div>
                <div class="why-card">
                    <h3>Réservation Facile</h3>
                    <p>Prendre un rendez-vous en quelques clics, simple et rapide.</p>
                </div>
            </div>
        </section>

        <!-- Section Témoignages -->
        <section class="testimonials-section">
            <h2>Ce Que Disent Nos Patients</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <p>"Le processus de réservation est super simple, et j'ai eu un rendez-vous rapidement. Je recommande vivement!"</p>
                    <h4>- Pierre L.</h4>
                </div>
                <div class="testimonial-card">
                    <p>"Des médecins compétents et attentionnés. Très satisfait de la qualité des services." </p>
                    <h4>- Julie M.</h4>
                </div>
                <div class="testimonial-card">
                    <p>"Excellente plateforme pour réserver en ligne. Rapide et efficace!"</p>
                    <h4>- Thomas B.</h4>
                </div>
            </div>
        </section>

        <!-- Section Appel à l'Action -->
        <section class="cta-section">
            <h2>Prêt à prendre rendez-vous ?</h2>
            <p>Choisissez votre service médical et réservez en quelques clics !</p>
            <a href="reservation.html" class="btn-primary">Réservez Maintenant →</a>
        </section>

    </main>

    <?php 
    include '../partials/footer.php';
    ?>
</body>

</html>
