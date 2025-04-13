<header>
  <style>
      @media (max-width: 800px) {
    .hamburgerDiv{
        display:flex;
        justify-content: space-between;
    }
    .hamburger {
      display: flex;
      justify-content: center;
    }
  
    .navDiv {
      display: none;
      position: absolute;
      top: 70px;
      margin-left: 10px;
      background: white;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border-radius: 8px;
      padding: 10px;
      z-index: 10;
    }
    .headerIcone{
        display: none;
    }

    .navDiv.active {
      display: block;
      background-color: var(--colorHamburgerBK);
    }
  
    .navDiv ul {
      flex-direction: column;
      gap: 10px;
    }
    .headerButton{
        display:none;
    }
  }
    </style>
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