<header>
    <style>
        /* Stile base */
header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
}

.navDiv ul {
  list-style: none;
  display: flex;
  gap: 20px;
}

.navDiv ul li a {
  text-decoration: none;
  color: inherit;
}

/* HAMBURGER */
.hamburger {
  display: none;
  flex-direction: column;
  cursor: pointer;
  gap: 5px;
}

.hamburger span {
  width: 25px;
  height: 3px;
  background: black;
  display: block;
}

/* Responsive */
@media (max-width: 768px) {
  .hamburger {
    display: flex;
  }

  .navDiv {
    display: none;
    position: absolute;
    top: 70px;
    right: 20px;
    background: white;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    border-radius: 8px;
    padding: 10px;
    z-index: 10;
  }

  .navDiv.active {
    display: block;
  }

  .navDiv ul {
    flex-direction: column;
    gap: 10px;
  }
}

</style>
  <div class="headerIcone">
    <img src="images/icone/iconaBase.svg" alt="Site icon" style="width: 100px;">
  </div>

  <!-- Hamburger icon -->
  <div class="hamburger" onclick="toggleMenu()">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <!-- Navigation -->
  <nav class="navDiv" id="navMenu">
    <ul>
      <li><a href="/SitoWebAerea/home.php">Home</a></li>
      <li><a href="/SitoWebAerea/shop.php">Shop</a></li>
      <li><a href="/SitoWebAerea/designYourTools.php">Design</a></li>
      <li><a href="/SitoWebAerea/Rent.php">Rent</a></li>
      <li><a href="/SitoWebAerea/AboutUs.php">About us</a></li>
    </ul>
  </nav>
</header>