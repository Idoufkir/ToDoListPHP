<?php include "includes/header.php" ?>
<?php include "includes/Home.php" ?>

  <main id="main">
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>User Profile</h2>
          </div>

        <div class="row">
          <?php
          include("session.php");
          include("request/classhome.php");
          $users = new users();
          $data = $users->userProfile();
              foreach($data as $key) {

                  $id = $key['idU'];
                    $username = $key['username'];
                      $email = $key['email'];
                        $Fname = $key['Fname'];
                          $Lname = $key['Lname'];
                            $photo = $key['photo'];
                              $function = $key['function'];
              ?>


          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/<?php echo $photo; ?>" class="img-fluid" alt="" style="height: 130px;">
          </div>
          <div class="col-lg-12 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3><?php echo $function; ?></h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Fname:</strong> <?php echo $Fname; ?></li>
                  <li><i class="icofont-rounded-right"></i> <strong>Lname:</strong>  <?php echo $Lname; ?></li>
                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +212 231676714</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> <?php echo $email; ?></li>
                  <li><i class="icofont-rounded-right"></i> <strong>City:</strong> City : New York, USA</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> 30</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> Master</li>
                  <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> email@example.com</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                </ul>
              </div>
            </div>
            <p>
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p>
          </div>
          <?php   } ?>
        </div>

      </div>
    </section>
</main>
    <?php include "includes/footer.php" ?>
