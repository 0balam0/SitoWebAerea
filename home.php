<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il Tuo Sito</title>
    <link rel="stylesheet" href="style.css"> <!-- Collega il tuo file CSS -->
</head>
<body>
    <?php include('header.php'); ?> <!-- Includi l'header -->

    <main>
        <div class= mainFigureDiv>
        <img src="images/image_home.png" alt="Site icone" class=mainFigure>
            <div class=iconeContainer>
                <div >
                </div>
                <div>
                    <img src="images/icone/designIco.png" alt="designIco">  
                    <h3>Design your tools</h3> 
                </div>    
                <div >
                    <img src="images/icone/shopIco.png" alt="shopIco">
                    <h3>Shop</h3>     
                </div>
                <div >
                    <img src="images/icone/infoIco.png" alt="InfoIco">
                    <h3>About Us</h3>     
                </div>
                <div >
                </div>
            </div>
        </div>
    </main>
    <?php include('footer.php'); ?> <!-- Includi l'header -->
</body>
</html>