<?php  include("request/classtask.php");


            $task = new tasks();

            if (isset($_GET["idtask"])) {


                  $idT =  $_GET["idtask"];
                  $task->DeleteTask($idT);

            }









?>
