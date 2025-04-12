<header>
  <div class='headerIcone'>
    <img src="images/icone/iconaBase.svg" alt="Site icone" style='width: 100px;' >
  </div>
  <div class='navDiv' id="navMenu">
    <nav>
      <ul>
        <li><a href="/SitoWebAerea/home.php">Home</a></li>
        <li><a href="/SitoWebAerea/shop.php">Shop</a></li>
        <li><a href="/SitoWebAerea/designYourTools.php">Design</a></li>
        <li><a href="/SitoWebAerea/Rent.php">Rent</a></li>
        <li><a href="/SitoWebAerea/AboutUs.php">About us</a></li>
      </ul>
    </nav>
  </div>
  <div class=hamburgerDiv>
    <div class="hamburger" onclick="toggleMenu()">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div>
      <img src="images/icone/iconaBase.svg" alt="Site icone" style='width: 100px;' >
    </div>
</div>
<script>

  function toggleMenu() {
    const nav = document.getElementById('navMenu');
    nav.classList.toggle('active');
  }
</script>
</header>