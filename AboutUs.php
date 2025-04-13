<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AboutUs</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cardObj.css">
</head>
<body>
    <?php include('header.php'); ?>
    <main>
        <div class="mainDivNoimage">

            <!-- Persona 1 -->
            <section class="person-section reverse">
                <div class="person-text">
                    <h2>Marisa Munafò</h2>
                    <p>Giulia è una designer con una passione per l’estetica e la funzionalità. Ama trasformare idee in esperienze visive e crede che ogni dettaglio conti.</p>
                </div>
                <div class="person-image">
                    <img src="images/Marisa.jpg" alt="Foto di Giulia Rossi">
                </div>
            </section>

            <!-- Persona 2 -->
            <section class="person-section">
                <div class="person-text">
                    <h2>Matteo De Marco</h2>
                    <p>Marco è uno sviluppatore appassionato di tecnologia e innovazione. Ama creare soluzioni semplici a problemi complessi con codice pulito e ben strutturato.</p>
                </div>
                <div class="person-image">
                    <img src="images/Matteo.jpg" alt="Foto di Marco Bianchi">
                </div>
                
            </section>

        </div>
        <?php include('footer.php'); ?>
    </main>
</body>
</html>
