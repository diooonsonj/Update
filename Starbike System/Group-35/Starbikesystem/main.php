<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Starbike Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="css/starbike.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-black">

  <!-- Topbar -->
  <header class="topbar">

    <!-- Menus dropdown -->
    <div class="menu-dropdown">
      <div class="dropdown">
        <button class="dropdown-btn">MOTORCYCLE <i class="fas fa-caret-down ml-1"></i></button>
        <div class="dropdown-content">
          <a href="motoinv.php">Inventory</a>
          <a href="#">Others</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropdown-btn">BICYCLE <i class="fas fa-caret-down ml-1"></i></button>
        <div class="dropdown-content">
          <a href="#">Inventory</a>
          <a href="#">Others</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropdown-btn">E-BIKE <i class="fas fa-caret-down ml-1"></i></button>
        <div class="dropdown-content">
          <a href="#">Inventory</a>
          <a href="#">Others</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropdown-btn">SHOP <i class="fas fa-caret-down ml-1"></i></button>
        <div class="dropdown-content">
          <a href="Shop.php">Shop</a>
          <a href="#">Latest</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropdown-btn">SETTING <i class="fas fa-caret-down ml-1"></i></button>
        <div class="dropdown-content">
          <a href="#">Profile</a>
          <a href="#">About</a>
        </div>
      </div>
    </div>

    <!-- Center Logo -->
    <div class="logo-container">
      <a href="main.php">
      <img src="img/starbike.png" alt="Starbike Logo" class="logo-img">
      </a>
    </div>

    <!-- Search Bar -->
  <form action="search.php" method="GET" class="relative">
  <input 
    type="search" 
    name="query" 
    placeholder="Search..." 
    class="search-input pl-10 pr-4 py-2"
  />
  <button type="submit" class="absolute left-2 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-black">
    <i class="fas fa-search"></i>
  </button>
</form>

    <!-- Auth Buttons

    <div class="logreg">
      <a href="login.php" class="auth-btn">Login</a>
      <a href="register.php" class="auth-btn">Register</a>
    </div>

    -->
    
  </header>

  <!-- Main Content -->
<main class="content">

<!-- Shop Picture -->
<div class="image-main">
<a href="Shop.php">
<img src="img/mainshop.jpg">
<div class="image-text">EXPLORE THE SHOP</div>
</a>
</div>

    <div class="cardground">
    <!-- Image Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
      <a href="#motorcycles" class="card">
        <img src="img/1.jpg" alt="Motorcycles" class="card-img">
        <div class="card-overlay">Motorcycles</div>
      </a>
      <a href="#helmets" class="card">
        <img src="img/2.jpg" alt="Helmets" class="card-img">
        <div class="card-overlay">Helmets</div>
      </a>
      <a href="#topbox" class="card">
        <img src="img/3.jpg" alt="Top Box" class="card-img">
        <div class="card-overlay">Top Box</div>
      </a>
      <a href="#bicycle" class="card">
        <img src="img/4.jpg" alt="Bicycle" class="card-img">
        <div class="card-overlay">Bicycle</div>
      </a>
      <a href="#ebike" class="card">
        <img src="img/5.jpg" alt="E-Bike" class="card-img">
        <div class="card-overlay">E-Bike</div>
      </a>
    </div>
</div>


 <div class="section2">
    <div class="section-image2">
      <img src="img/Bicycle.jpg" alt="Electric Motorcycle">
    </div>
    <div class="section-content2">
      <h2>Bicycle</h2>
      <p>
        Push beyond your limits. Every pedal forward is one less excuse. Believe, breathe, and ride toward the greatness inside you.
      </p>
      <button class="btn">EXPLORE BICYCLE <span>&rarr;</span></button>
    </div>
  </div>

</main>
</body>
</html>