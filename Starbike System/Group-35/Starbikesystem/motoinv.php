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
          <a href="#">Inventory</a>
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
          <a href="#">Shop</a>
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

  <!-- Hero Banner -->
  <section class="bg-white p-6">
    <div class="w-full h-48 bg-gray-300 flex items-center justify-center text-2xl text-gray-600 rounded">
      Banner Carousel Here
    </div>
  </section>

  <!-- Flash Deals -->
  <section class="p-6 bg-white mt-4">
    <h2 class="text-xl font-bold mb-4">⚡ Flash Deals</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
      <!-- Repeat product cards -->
      <div class="bg-gray-100 p-4 rounded shadow">
        <div class="h-32 bg-gray-300 mb-2 rounded"></div>
        <h3 class="text-sm">Product Name</h3>
        <p class="text-red-500 font-bold">₱999</p>
        <p class="line-through text-gray-500 text-sm">₱1,499</p>
        <button class="bg-orange-500 text-white w-full mt-2 py-1 rounded">Add to Cart</button>
      </div>
    </div>
  </section>

  <!-- Categories -->
  <section class="section">
  <h2></h2>
  <div class="categories">
    <div class="category">
      <img src="img/electronics.png" alt="Electronics">
      <p></p>
    </div>
    <div class="category">
      <img src="img/fashion.png" alt="Fashion">
      <p></p>
    </div>
    <div class="category">
      <img src="img/beauty.png" alt="Beauty">
      <p></p>
    </div>
    <div class="category">
      <img src="img/home.png" alt="Home">
      <p></p>
    </div>

  </div>
</section>

  <!-- Recommended Products -->
  <section class="p-6 bg-white mt-4">
    <h2 class="text-xl font-bold mb-4">🛍️ Recommended For You</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
      <!-- Repeat product cards -->
      <div class="bg-gray-100 p-4 rounded shadow">
        <div class="h-32 bg-gray-300 mb-2 rounded"></div>
        <h3 class="text-sm">Recommended Product</h3>
        <p class="text-red-500 font-bold">₱499</p>
        <p class="text-yellow-500 text-xs">⭐ 4.5</p>
        <button class="bg-orange-500 text-white w-full mt-2 py-1 rounded">Add to Cart</button>
      </div>
    </div>
  </section>



</main>
</body>
</html>