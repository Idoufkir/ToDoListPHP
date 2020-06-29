<?php include "includes/header.php" ?>
<?php include('request/classhome.php'); ?>
<?php include "includes/Home.php"?>

<?php






  $users = new users();

      function valid($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

      }


      if(isset($_POST["Fname"]) && isset($_POST["Lname"]) && isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["function"]) && isset($_POST["photo"])){
          $Fname = $_POST["Fname"] ;
          $Lname = $_POST["Lname"] ;
          $username = $_POST["username"] ;
          $email = $_POST["email"] ;
          $password = $_POST["password"];
          $function = $_POST["function"];
          $photo = $_POST["photo"];

            echo $password;


        if(isset($_POST["valide"])) {


          $users->register($Fname,$Lname,$username,$email,$password,$function,$photo);



        }

    }


 ?>
    <main id="main">

          <section >
            <div class="container">

              <div class="section-title">
                <h2>Create Account</h2>
                <p>Thank you For Your Registration.Welcome To Our To Do List</p>
              </div>

              <div>

                <form method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">First name :</label>
                        <input type="text" class="form-control" name="Fname">

                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Last name :</label>
                        <input type="text" class="form-control" name="Lname">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Username :</label>
                        <input type="text" class="form-control" name="username">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Em@il :</label>
                        <input type="email" class="form-control" name="email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password :</label>
                        <input type="password" class="form-control" name="password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Function :</label>
                        <input type="text" class="form-control" name="function">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Photo :</label>
                        <input type="text" class="form-control" name="photo">
                      </div>

                      <button type="submit" class="btn btn-primary" name="valide">Submit</button>
                    </form>
                </div>

              </div>

            </div>
          </section>
    </main>
<?php include "includes/footer.php" ?>
