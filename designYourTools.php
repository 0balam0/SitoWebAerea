<?php
// Modifica questo indirizzo con quello a cui vuoi ricevere le email
$destinatario = "dmr.matteo@email.com";
$messaggioInviato = false;
$errore = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars(trim($_POST["nome"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $Nome_ogetto = htmlspecialchars(trim($_POST["Nome_ogetto"]));
    $caratteristiche = htmlspecialchars(trim($_POST["caratteristiche"]));

    // Controllo base
    if ($nome && $email && $Nome_ogetto && $caratteristiche) {
        $oggetto = "Nuova richiesta attrezzo da $nome";
        $messaggio = "Hai ricevuto una nuova richiesta:\n\n";
        $messaggio .= "Nome: $nome\n";
        $messaggio .= "Email: $email\n\n";
        $messaggio .= "Nome Ogetto:\n$Nome_ogetto\n\n";
        $messaggio .= "Caratteristiche:\n$caratteristiche\n";

        $headers = "From: $email";

        if (mail($destinatario, $oggetto, $messaggio, $headers)) {
            $messaggioInviato = true;
        } else {
            $errore = true;
        }
    } else {
        $errore = true;
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Richiesta Attrezzo Aereo</title>
    <link rel="stylesheet" href="style.css"> <!-- Collega il tuo file CSS -->
    <link rel="stylesheet" href="designTool.css"> <!-- Collega il tuo file CSS -->
</head>
<main>
    <body>
        <?php include('header.php'); ?>
        <?php if ($messaggioInviato): ?>
            <p class="success">Messaggio inviato con successo! Ti contatteremo al più presto.</p>
        <?php elseif ($errore): ?>
            <p class="error">Errore nell'invio. Controlla i dati inseriti e riprova.</p>
        <?php endif; ?>
        
        <div class="mainFigureDiv" style="background-image: url('images/designWallPaper.png'); opacity: 0.7;";>
        <div style="height: 100px;"></div>
            <form action="" method="POST">
                <div style="margin-right: 20px;">
                    <h3>Richiedi un attrezzo personalizzato</h3>
                    <label for="nome">Il tuo nome</label>
                    <input type="text" id="nome" name="nome" required>

                    <label for="email">La tua email</label>
                    <input type="email" id="email" name="email" required>

                    <label for="Nome_ogetto">Nome attrezzatura</label>
                    <input type="Nome_ogetto" id="Nome_ogetto" name="Nome_ogetto" required>
                    <!-- <textarea id="descrizione" name="descrizione" rows="0" required></textarea> -->

                    <label for="caratteristiche">Caratteristiche richieste</label>
                    <textarea id="caratteristiche" name="caratteristiche" rows="4" required></textarea>

                    <button type="submit">Invia richiesta</button>
                </div>
            </form>
            <div style="height: 100px;"></div>
        </div>
        <?php include('footer.php'); ?> <!-- Includi l'header -->
    </body>
</main>
</html>