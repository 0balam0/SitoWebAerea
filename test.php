<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Espandibili</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0f172a',
                        secondary: '#1e293b',
                        accent: '#06b6d4',
                        'accent-secondary': '#f472b6',
                        dark: '#020617',
                        'text-light': '#f8fafc',
                        'text-muted': '#94a3b8'
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                        display: ['Poppins', 'system-ui', 'sans-serif'],
                    },
                    boxShadow: {
                        glow: '0 0 20px rgba(6, 182, 212, 0.35)',
                        'glow-lg': '0 0 30px rgba(6, 182, 212, 0.45)'
                    }
                }
            }
        }
    </script>
    
    <link rel="stylesheet" href="style.css"> <!-- Collega il tuo file CSS -->
    <link rel="stylesheet" href="cardObj.css"> <!-- Collega il tuo file CSS -->
    
</head>
<body>
    <?php include('header2.php'); ?> <!-- Includi l'header -->
    <main>
        <div class="mainFigureDiv">
            <div>
            <h3> Attrezzature realizzate da materiali di ottima qualità. progettate da chi fa Aerea per chi vive l'aerea come una passione<h3>
            </div>
            <div class="card-container">
                <div class="card" onclick="toggleCard(this)" data-id='AerialHoops'>
                    <div class='imgCard'> <img src="images/shopping/cerchio.jpg" alt="img 1" ></div>
                    <div class="card-title">Aerial Hoop</div>
                    <!--<div class="card-description">Clicca per maggiori dettagli</div> -->
                    <!--<div class="card-content">Questa è la sezione espandibile della Card 1. Qui puoi aggiungere informazioni più dettagliate come testo, immagini, video o qualsiasi altro contenuto.</div>-->
                </div>

                <div class="card" onclick="toggleCard(this)" data-id='AerialMoon'>
                    <div class='imgCard'> <img src="images/shopping/lunaBig.jpg" alt="img 1" ></div>
                    <div class="card-title">Aerial Moon</div>
                </div>

                <div class="card" onclick="toggleCard(this)" data-id='LunaSmall'>
                    <div class='imgCard'> <img src="images/shopping/lunaSmall.jpg" alt="img 1" ></div>
                    <div class="card-title">Aerial Moon small</div>
                     <!--<div class="card-description">Clicca per maggiori dettagli</div> -->
                    <!--<div class="card-content">Questa è la sezione espandibile della Card 1. Qui puoi aggiungere informazioni più dettagliate come testo, immagini, video o qualsiasi altro contenuto.</div>-->
                </div>

                <div class="card" onclick="toggleCard(this)" data-id='deltaAerea'> 
                    <div class='imgCard'> <img src="images/shopping/deltaAerea.webp" alt="img 1" ></div>
                    <div class="card-title">Informazioni Generali sulla Card 4</div>
                     <!--<div class="card-description">Clicca per maggiori dettagli</div> -->
                    <!--<div class="card-content">Questa è la sezione espandibile della Card 1. Qui puoi aggiungere informazioni più dettagliate come testo, immagini, video o qualsiasi altro contenuto.</div>-->
                </div>
                <div class="card" onclick="toggleCard(this)" data-id='AerialHoopsSpin'>
                    <div class='imgCard'> <img src="images/shopping/cerchio.jpg" alt="img 1" ></div>
                    <div class="card-title">Informazioni Generali sulla Card 4</div>
                     <!--<div class="card-description">Clicca per maggiori dettagli</div> -->
                    <!--<div class="card-content">Questa è la sezione espandibile della Card 1. Qui puoi aggiungere informazioni più dettagliate come testo, immagini, video o qualsiasi altro contenuto.</div>-->
                </div>
                <div class="card" onclick="toggleCard(this)" data-id='SpiraleAerea'>
                    <div class='imgCard'> <img src="images/shopping/spirale.jpeg" alt="img 1" ></div>
                    <div class="card-title">Informazioni Generali sulla Card 4</div>
                     <!--<div class="card-description">Clicca per maggiori dettagli</div> -->
                    <!--<div class="card-content">Questa è la sezione espandibile della Card 1. Qui puoi aggiungere informazioni più dettagliate come testo, immagini, video o qualsiasi altro contenuto.</div>-->
                </div>
                <div class="card" onclick="toggleCard(this)" data-id='strutturaAerea'>
                    <div class='imgCard'> <img src="images/shopping/struttura.webp" alt="img 1" ></div>
                    <div class="card-title">Informazioni Generali sulla Card 4</div>
                     <!--<div class="card-description">Clicca per maggiori dettagli</div> -->
                    <!--<div class="card-content">Questa è la sezione espandibile della Card 1. Qui puoi aggiungere informazioni più dettagliate come testo, immagini, video o qualsiasi altro contenuto.</div>-->
                </div>
            </div>

            <div id="overlay" class="overlay">
                <span class="close-btn" onclick="closeOverlay()">×</span>
                <div class="overlay-content">
                    <div id="overlay-inner-content">
                    <!-- Qui inserisci dinamicamente il contenuto della card -->
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include('footer.php'); ?> <!-- Includi l'header -->
<script>
// Funzione per aprire l'overlay e caricare la pagina PHP dinamicamente
function toggleCard(card) {
    const cardId = card.getAttribute('data-id');  // ID della card cliccata
    if (!cardId) {
        console.error('Errore: la card non ha un data-id valido');
        console.error(cardId);
        console.error(card);
        return; // Esci dalla funzione se il data-id non è presente
    }
    card.classList.add('show');
    document.body.classList.add('overlay-active');
    // Esegui la richiesta AJAX per caricare il contenuto PHP
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'shopPageDetails/' + cardId + '.php', true); // URL della pagina PHP che carica il contenuto
    xhr.onload = function() {
        if (xhr.status === 200) {
            // Quando la richiesta ha avuto successo, carica il contenuto nell'overlay
            document.getElementById('overlay-inner-content').innerHTML = xhr.responseText;
            document.getElementById('overlay').style.display = 'flex';
        } else {
            console.error('Errore nel caricamento del contenuto');
        }
    };
    xhr.send();
}

// Funzione per chiudere l'overlay
function closeOverlay() {
    document.getElementById('overlay').style.display = 'none';
    overlay.classList.remove('show');
    document.body.classList.remove('overlay-active');

}

// Funzione per aprire l'immagine ingrandita nell'overlay
function openImage(imgElement) {
    const overlay = document.getElementById('image-overlay');
    const overlayImage = document.getElementById('overlay-image');
    overlay.style.display = 'flex';
    overlayImage.src = imgElement.src;
}

// Funzione per chiudere l'overlay
function closeOverlayImg() {
    document.getElementById('image-overlay').style.display = 'none';
}

// Funzione per aggiungere al carrello
function addToCart() {
    alert('Il prodotto è stato aggiunto al carrello!');
}

</script>
</body>


</html>
