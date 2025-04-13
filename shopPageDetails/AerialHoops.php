<?php
// header3.php

// Qui puoi scrivere il codice HTML per il tuo header personalizzato
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetrina Prodotto</title>
</head>
<body>

    <div class="product-container">
        <!-- Immagini Prodotto -->
        <div class="product-images">
            <!-- Immagine principale -->
            <div class="main-image">
                <img src="images/shopping/fotoCerchio/cerchio1.avif" alt="Immagine Prodotto" onclick="openImage(this)">
            </div>

            <!-- Immagini piccole sotto -->
            <div class="small-images">
                <img src="images/shopping/fotoCerchio/cerchio2.avif" alt="Immagine Prodotto" onclick="openImage(this)">
                <img src="images/shopping/fotoCerchio/cerchio2.avif" alt="Immagine Prodotto" onclick="openImage(this)">
                <img src="images/shopping/fotoCerchio/cerchio2.avif" alt="Immagine Prodotto" onclick="openImage(this)">
                <img src="images/shopping/fotoCerchio/cerchio2.avif" alt="Immagine Prodotto" onclick="openImage(this)">
            </div>
        </div>

        <!-- Dettagli Prodotto -->
        <div class="product-details">
            <div class="product-title">Prodotto Aerial Hoop</div>
            <div class="product-description">
                Questo è un prodotto di alta qualità, aslkdjlàaksjdaksjdàkalsjd
                àkajsdklàòjasdklàjaslàkdjaòlkdjsklòàasdj
                addslashesasd
                addslashes
                addslashes
                addslashes
                addslashes
                addslashes
                addslashes
                as
                aslkdjlàaksjdaksjdàkalsjd
                addslashesasdas
                asd
                Questo è un prodotto di alta qualità, aslkdjlàaksjdaksjdàkalsjd
                àkajsdklàòjasdklàjaslàkdjaòlkdjsklòàasdj
                addslashesasd
                addslashes
                addslashes
                addslashes
                addslashes
                addslashes
                addslashes
                as
                aslkdjlàaksjdaksjdàkalsjd
                addslashesasdas
                asd
                Questo è un prodotto di alta qualità, aslkdjlàaksjdaksjdàkalsjd
                àkajsdklàòjasdklàjaslàkdjaòlkdjsklòàasdj
                addslashesasd
                addslashes
                addslashes
                addslashes
                addslashes
                addslashes
                addslashes
                as
                aslkdjlàaksjdaksjdàkalsjd
                addslashesasdas
                asd
                Questo è un prodotto di alta qualità, aslkdjlàaksjdaksjdàkalsjd
                àkajsdklàòjasdklàjaslàkdjaòlkdjsklòàasdj
                addslashesasd
                addslashes
                addslashes
                addslashes
                addslashes
                addslashes
                addslashes
                as
                aslkdjlàaksjdaksjdàkalsjd
                addslashesasdas
                asd
                alkòjsdàlaksdàòlkas
                
                lòaksjdòlaskjdà
                òasjdòaskd
                aperfetto per chi cerca un'esperienza aerea unica. Realizzato con materiali resistenti e sicuri per garantire una performance al top!
            </div>
            <div class="buySectionDiv">
                <p></p>
              <div class="product-price">€ 199,99</div>
              <p></p>
              <?php include '../getIntouch.php'; ?>
            </div>
        </div>
    </div>

    <!-- Overlay Immagine Ingrandita -->
    <div class="overlayImgDiv" id="image-overlay">
        <span class="close-btn" onclick="closeOverlayImg()">×</span>
        <img id="overlay-image" src="" alt="Immagine Ingrandita">
    </div>

</body>
<?php
// Puoi aggiungere altro contenuto o dinamismo PHP qui, se necessario
?>
