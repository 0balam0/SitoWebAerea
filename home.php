<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il Tuo Sito</title>
    <link rel="stylesheet" href="style.css"> <!-- Collega il tuo file CSS -->
</head>
<body>
    <!-- <?php include('header.php'); ?> --> <!-- Includi l'header -->
    <?php include('header2.php'); ?> <!-- Includi l'header -->
    <main>
        <div class="mainFigureDiv">
        <!--<img src="images/image_home.png" alt="Site icone" class=mainFigure>-->
        <!--<div class="spaceMainFig" ></div>-->
            <div class=iconeContainer>
                <div>
                </div>
                <div class="icoTextContainer">
                    <a href="/SitoWebAerea/designYourTools.php">
                        <img src="images/icone/designIco.png" alt="designIco">
                    </a>
                    <h3>Design your tools</h3> 
                </div>    
                <div class="icoTextContainer">
                    <a href="/SitoWebAerea/shop.php">
                        <img src="images/icone/shopIco.png" alt="shopIco">
                    </a>
                    <h3>Shop</h3>     
                </div>
                <div class="icoTextContainer">
                    <a href="/SitoWebAerea/rent.php">
                        <img src="images/icone/rentIco.png" alt="shopIco">
                    </a>
                    <h3>Rent</h3>     
                </div>
                <div class="icoTextContainer">
                    <a href="/SitoWebAerea/aboutUs.php">
                        <img src="images/icone/infoIco.png" alt="InfoIco">
                    </a>
                    <h3>About Us</h3>     
                </div>
                <div >
                </div>
            </div>

        </div>
            
        <div class='divDescHome'>

            <h3>Mari&Matt aerialDesign</h3>
            <p>Creazioni su misura, pensate per chi vive l'aerea come passione."</p>   
            <p>Progettiamo e realizziamo attrezzi per discipline aeree.</p> 
        </div>

        <div class="galleria-container" id="galleria">
            <div class="immagineDiv"><img src="images/foto1.jpg" alt="img 1"></div>
            <div class="immagineDiv"><img src="images/foto2.jpg" alt="img 2"></div>
            <div class="immagineDiv"><img src="images/foto3.jpg" alt="img 3"></div>
            <div class="immagineDiv"><img src="images/foto4.jpg" alt="img 4"></div>
            <div class="immagineDiv"><img src="images/foto5.jpg" alt="img 5"></div>
            <div class="immagineDiv"><img src="images/foto6.jpg" alt="img 5"></div>
            <div class="immagineDiv"><img src="images/foto7.jpg" alt="img 5"></div>
            <!-- Puoi aggiungere altre immagini qui -->
        </div>
    </main>
    <?php include('footer.php'); ?> <!-- Includi l'header -->

    <script>
    const galleria = document.getElementById('galleria');
    let scrollAmount = 0;

    function autoScroll() {
      scrollAmount += 1;
      galleria.scrollLeft = scrollAmount;

      // Se arriviamo in fondo, ricominciamo
      if (galleria.scrollLeft + galleria.clientWidth >= galleria.scrollWidth) {
        scrollAmount = 0;
      }
    }

    // Cambia il numero per velocità: 20ms = veloce, 50ms = più lento
    setInterval(autoScroll, 30);
  </script>
</body>
</html>