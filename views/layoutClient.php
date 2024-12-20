

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Admin Starter Template : Tailwind Toolbox</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link href="https://fonts.googleapis.com/css2?family=Rozha+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> 
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/css/style.css" rel="stylesheet" />
<!-- responsive style -->
<link href="css/responsive.css" rel="stylesheet" />
<link href="assets/css/style.css" rel="stylesheet" />
</head>

<body class=" font-sans leading-normal tracking-normal mt-12">
<header class="bg-white/95 backdrop-blur-md shadow-sm py-4">
      <div class="container mx-auto px-4">
        <nav class="flex justify-between items-center text-black">
          <div class="flex items-center space-x-12">
            <a href="/" class="flex items-center space-x-2">

              <span class="font-display text-2xl text-gray-900">Wellington & Partners</span>
            </a>
            
            <!-- Desktop Navigation -->
            <div class="hidden lg:flex space-x-8">
              <a href="#home" class="nav-link">Home</a>
              <a href="#attorneys" class="nav-link">Our Attorneys</a>
              <a href="#expertise" class="nav-link">Expertise</a>
              <a href="#contact" class="nav-link">Contact</a>
            </div>
          </div>
            <div><?=$_COOKIE['idClient']?></div>
          <div class="hidden lg:flex items-center space-x-6">
    <a href="index.php?action=<?php echo isset($_COOKIE['idClient']) ? 'home&idClient=' . $_COOKIE['idClient'] : 'formClient'; ?>" 
       class="btn-primary">Start Consultation</a>
</div>

          <button id="menu-btn" class="lg:hidden flex flex-col space-y-2 menu-btn">
            <span class="burger-line"></span>
            <span class="burger-line"></span>
            <span class="burger-line"></span>
          </button>
        </nav>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden lg:hidden mt-4 pb-4">
          <div class="flex flex-col space-y-4">
            <a href="#home" class="nav-link">Home</a>
            <a href="#attorneys" class="nav-link">Our Attorneys</a>
            <a href="#expertise" class="nav-link">Expertise</a>
            <a href="#contact" class="nav-link">Contact</a>
            <a href="#contact" class="btn-primary text-center">Schedule Consultation</a>
          </div>
        </div>
      </div>
</header>
    
    <?=$content?>
    <script src="assets/js/script.js"></script>
</body>
</html>