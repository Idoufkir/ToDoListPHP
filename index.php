<?php include "includes/header.php" ?>

<?php include "includes/Home.php" ?>


<?php include("session.php"); ?>


            <?php

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
  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Welcome To Our To Do List..</div>
        <div class="intro-heading text-uppercase">It's Nice To Meet You<h4><?php echo $Fname." ".$Lname; ?></h4>
        <img src="assets/img/<?php echo $photo; ?>" class="testimonial-img" alt=""><br>
        <h5>Function :</h5><h4><?php echo $function; ?></h4>
        
      </div>
      </div>
    </div>
  </header>
            <?php   } ?>


            

<?php include "includes/footer.php" ?>
