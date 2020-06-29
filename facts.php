<?php include "includes/header.php" ?>
<?php include "includes/Home.php" ?>

<?php
  include("session.php");
    include("request/classhome.php");
    $users = new users();
    $data1 = $users->allUsers();
    $nbrUser = $data1[0][0];
    $data2 = $users->allList();
    $nbrLists = $data2[0][0]
 ?>
 <!-- Services -->
 <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Our Fact</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-6">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-user fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Users</h4>
          <p class="text-muted"><?php echo $nbrUser; ?></p>
        </div>
        <div class="col-md-6">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-list fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Lists</h4>
          <p class="text-muted"><?php echo $nbrLists; ?></p>
        </div>
      </div>
    </div>
  </section>
    <?php include "includes/footer.php" ?>
