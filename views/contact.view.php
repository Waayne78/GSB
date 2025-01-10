<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - GSB Prise de RDV</title>
    <link rel="stylesheet" href="../styles/contact.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/header.css">
</head>

<body>
    <?php include '../partials/header.php'; ?>
    <main>
        <section class="contact-section">
            <div class="contact-info">
                <h2>Nos coordonnées</h2>
                <p>Email : contact@gsb.com</p>
                <p>Téléphone : +33 1 23 45 67 89</p>
                <p>Adresse : 123 Rue des Médecins, 75000 Paris, France</p>
            </div>

            <form class="contact-form" action="submit_contact.php" method="POST">
                <h2>Envoyez-nous un message</h2>
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="name" placeholder="Votre nom" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Votre email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Sujet</label>
                    <input type="text" id="subject" name="subject" placeholder="Sujet de votre message" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Votre message" required></textarea>
                </div>
                <button type="submit" class="btn">Envoyer</button>
            </form>
        </section>
    </main>

    <?php include '../partials/footer.php'; ?>

</body>

</html>
