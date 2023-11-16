<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title >Kisaki's Recipes</title>

  <link type="image/png" sizes="32x32" rel="icon" href="images/icons8-noodles-3d-fluency-32.png">

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,200&family=Ubuntu:ital@1&display=swap" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/navigationbar.css">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/5c32d52e92.js" crossorigin="anonymous"></script>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Link to the React build files -->
  <!-- <link rel="stylesheet" href="/my-app/build/static/css/main.0c55d96e.css"> -->
</head>


<body>
  
  <!-- Rendering the React app inside this div -->
  <div id="root"></div>

  <!-- Header -->
  <?php include('my-app/src/header.php'); ?>

<main class="content home"> 
  <div id="search-filter-root"></div>

  <!-- Include the App.js file for the React search filter component -->
  <script src="/my-app/src/App.js"></script>

  <section id="blur-background">

    <!-- Title -->
    <div class="container-fluid" >
      <div class="row ">

        <div class="col-lg-6" id="row2">
          <div class="home-text-top">
            <h2 class="home-text">
              Super easy food recipes anyone can make!
              Make cooking fun, easy and enjoyable! 
            </h2>
          </div>

          <div class="share">
            <a href=""><i class="icon fa-brands fa-square-facebook fa-2x"></i></a>
            <a href=""><i class="icon fa-solid fa-envelope fa-2x"></i></a>
            <a href=""><i class="icon fa-brands fa-linkedin fa-2x"></i></a>
            <a href=""><i class="icon fa-brands fa-instagram fa-2x"></i></a>
            <a href=""><i class="icon fa-brands fa-whatsapp fa-2x"></i></a>
          </div>
        </div>

      </div>
    </div>

  </section>


  <!-- Features -->

  <section class="white-section" id="features">

    <div class="container-fluid">
      <div class="row">

        <div class="message-recipe col-lg-12">
          <h2>One of the food recipes that are very easy and quick to make! 
            Very delicious dishes.
          </h2>
        </div>
  
        <div class="feature-box col-lg-4">
          <a class="feature-links" href="mincepasta.php"><img class="imge" src="images/pasta&mince.jpg" alt=""></a>
          <a class="feature-links" href="mincepasta.php"><h3>Mince Pasta</h3></a>
          <p>Simple and easy meal to enjoy with friends and family.</p>
        </div>
  
        <div class="feature-box col-lg-4">
          <a class="feature-links" href="Eggmince.php"><img class="imge" src="images/mince2.jpg" alt=""></a>
          <a class="feature-links" href="Eggmince.php"><h3>EggMince Special Dish</h3></a>
          <p>Amazing tasty meal for dinner. </p>
        </div>
  
        <div class="feature-box col-lg-4">
          <a class="feature-links" href="pizza.php"><img class="imge" src="images/pizza1.jpg" alt=""></a>
          <a class="feature-links" href="pizza.php"><h3>Pizza</h3></a>
          <p>Easy, quick and delicious home made pizza. </p>
        </div>
        <div class="feature-box col-lg-4">
          <a class="feature-links" href="pizza.php"><img class="imge" src="images/pizza1.jpg" alt=""></a>
          <a class="feature-links" href="pizza.php"><h3>Pizza</h3></a>
          <p>Easy, quick and delicious home made pizza. </p>
        </div>
      </div>
    </div>
  </section>


  <!-- Recipes -->

  <section class="wall-text">
  <div class="container-fluid">
      <div class="row">

        <div class="message-recipe col-lg-12">
        
        </div>
      </div>
    </div>
  </section>


  <!-- New Dishes -->

  <section class="white-section" id="new-dishes">
    <div class="container-fluid">
      <div class="new-dishes-text col-lg-12">
        <h2 class="dessert-text">Indulge in a world of sweetness with our delightful dessert recipes.
                                  From heavenly cakes to decadent chocolates, satisfy your cravings with a spoonful of happiness.
        </h2>
      </div>
  
      <div id="carousel-new" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a class="feature-links" href="#"><img class="carousel-img" src="images/dessert1.jpg" alt="First slide"></a>
            <a class="feature-links" href="#"><h3>Dessert 1</h3></a>
              <p>More desserts coming soon!</p>
          </div>
          <div class="carousel-item">
            <a class="feature-links" href="#"><img class="carousel-img" src="images/dessert2.jpg" alt="Second slide"></a>
            <a class="feature-links" href="#"><h3>Dessert 2</h3></a>
              <p>More desserts coming soon!</p>
          </div>
          <div class="carousel-item">
            <a class="feature-links" href="#"><img class="carousel-img" src="images/dessert3.jpg" alt="Third slide"></a>
            <a class="feature-links" href="#"><h3>Dessert 3</h3></a>
              <p>More desserts coming soon!</p>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-new" role="button" data-slide="prev">
          <span id="prev-icon" class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carousel-new" role="button" data-slide="next">
          <span id="next-icon" class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
    </div>
          

  </section>


  <!-- More Recipes-->

  <section class="colored-section" id="more-recipes">

      <div class="container-fluid">
        <div class="more">
    
          <div class="row">

            <div class="more-recipes-text col-lg-12">
              <h2 class="more-title">Meat, a savory canvas for culinary creativity, where flavors, textures, 
                and traditions unite to create delicious masterpieces on your plate.
              </h2>
            </div>
      
            <div class="more-box col-lg-4">
              <a class="more-links" href=""><img class="imge" src="images/fish.jpg" alt=""></a>
              <a class="more-links" href=""><h3>Fish</h3></a>
              <p class="more-p">Easy to make delicious wors.</p>
            </div>
      
            <div class="more-box col-lg-4">
              <a class="more-links" href=""><img class="imge" src="images/t-bone.jpg" alt=""></a>
              <a class="more-links" href=""><h3>T-bone grilled beef.</h3></a>
              <p class="more-p">Juicy T-bone grilled beef to try out. </p>
            </div>
      
            <div class="more-box col-lg-4">
              <a class="more-links" href=""><img class="imge" src="images/meat1.jpg" alt=""></a>
              <a class="more-links" href=""><h3>Grilled Beef.</h3></a>
              <p class="more-p">Soft and yummy grilled beef for any meal. </p>
            </div>
            <div class="more-box col-lg-4">
              <a class="more-links" href=""><img class="imge" src="images/fish.jpg" alt=""></a>
              <a class="more-links" href=""><h3>Fish</h3></a>
              <p class="more-p">Easy to make delicious wors.</p>
            </div>
      
            <div class="more-box col-lg-4">
              <a class="more-links" href=""><img class="imge" src="images/t-bone.jpg" alt=""></a>
              <a class="more-links" href=""><h3>T-bone grilled beef.</h3></a>
              <p class="more-p">Juicy T-bone grilled beef to try out. </p>
            </div>
      
            <div class="more-box col-lg-4">
              <a class="more-links" href=""><img class="imge" src="images/meat1.jpg" alt=""></a>
              <a class="more-links" href=""><h3>Grilled Beef.</h3></a>
              <p class="more-p">Soft and yummy grilled beef for any meal. </p>
            </div>
          </div>
        </div>
      </div>

  </section>

  <!-- Message -->

  <section class="white-section" id="message">
  <div class="container-fluid">
      <div class="row">

        <div class="message-recipe col-lg-12">
          <h2>One of the food recipes that are very easy and quick to make! 
            Very delicious dishes.
          </h2>
        </div>
  
        <div class="feature-box col-lg-4">
          <a class="feature-links" href="mincepasta.php"><img class="imge" src="images/pasta&mince.jpg" alt=""></a>
          <a class="feature-links" href="mincepasta.php"><h3>Mince Pasta</h3></a>
          <p>Simple and easy meal to enjoy with friends and family.</p>
        </div>
  
        <div class="feature-box col-lg-4">
          <a class="feature-links" href="Eggmince.php"><img class="imge" src="images/mince2.jpg" alt=""></a>
          <a class="feature-links" href="Eggmince.php"><h3>EggMince Special Dish</h3></a>
          <p>Amazing tasty meal for dinner. </p>
        </div>
  
        <div class="feature-box col-lg-4">
          <a class="feature-links" href="pizza.php"><img class="imge" src="images/pizza1.jpg" alt=""></a>
          <a class="feature-links" href="pizza.php"><h3>Pizza</h3></a>
          <p>Easy, quick and delicious home made pizza. </p>
        </div>
        <div class="feature-box col-lg-4">
          <a class="feature-links" href="pizza.php"><img class="imge" src="images/pizza1.jpg" alt=""></a>
          <a class="feature-links" href="pizza.php"><h3>Pizza</h3></a>
          <p>Easy, quick and delicious home made pizza. </p>
        </div>
      </div>
    </div>

  </section>


  <!-- Footer -->
  <?php include('footer.php'); ?>

  <!-- Link to the React build files -->
  <!-- <script src="/my-app/build/static/js/main.85cb8f89.js"></script> -->

  </main>

  <!-- JavaScript -->
  <script src="script.js"></script>
</body>
</html>