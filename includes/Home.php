


  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <header id="header">
    <div class="d-flex flex-column">
      <?php
      session_start();

      if (isset($_SESSION["username"])) {

       ?>


      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">TodoList</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="lists.php">Lists</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="facts.php">Our Fact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="UserProfile.php">Your Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php">Log In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="logOut.php">Log Out</a>
          </li>
          <?php }else{?>
          <span class="badge badge-light">Connect, or Creat One</span>
          <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">TodoList</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php">Log In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="AddUser.php">Sign In</a>
          </li>
        <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header>
