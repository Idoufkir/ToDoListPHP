<?php include("database/connexion.php");


      class tasks extends database{

        public function showTask(){

            $query = "SELECT * from task ";

          $result = $this->db_connect()->query($query);
          $row = array();
              while ($data = $result->fetch()) {
                      $row[] = $data;
                }
                return $row;
        }

        public function AddTask($name,$id,$done){

          $query="INSERT into task values(null,'".$name."','".$id."','".$done."')";

          $this->db_connect()->query($query);
          header('location:lists.php');
          exit();
        }

        public function UpdateTask($done,$id){

          $query="UPDATE task SET done ='".$done."'  WHERE idT = ".$id;
          $this->db_connect()->query($query);

          header('location:lists.php');
          exit();
        }

        public function DeleteTask($id){

          $stmt = $this->db_connect()->prepare("DELETE FROM task WHERE idT= ?");

          $stmt->execute(array($id));

          header('location:lists.php');
          exit();
        }
      }
