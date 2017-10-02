<?php

// si on envoi des donnees, je les transliterator_transliterate
include('../vue/header.php');
include('../vue/forms_project.php');
include ('../model/project_function.php');
include ('../model/task.php');

if (isset($_POST['name_project']) AND isset($_POST['manager_project']) AND isset($_POST['city']) AND isset($_POST['description'])AND isset($_POST['start_date'])AND isset($_POST['end_date'])){

  Insertproject($_POST['name_project'],$_POST['manager_project'],$_POST['city'],$_POST['description'],$_POST['start_date'],$_POST['end_date']);
  }
  else{
      // echo 'not good';
  }


// //formulaire tâches
//
  if (isset($_POST['task_description']) AND isset($_POST['deadline'])){

  Inserttask($_POST['task_description'],$_POST['deadline']);
  // echo "ok";
  }
  else{
        // echo 'bad';
    }

//AFFICHAGE projet

$affichage= Selectproject();

$task=Selecttask();
include ('../vue/cards_project.php');


//password
if( isset($_POST['psw'])&&isset($_POST['user']) )
{
   $password=$_POST['psw'];
    $user=htmlspecialchars($_POST['user']);


      $req=$bdd->prepare('SELECT id  FROM user  WHERE name_user=? AND password=?');
     $req->execute(array($_POST['user'],$_POST['psw']));
     $compte_existe=$req->fetch();




     if(!$compte_existe)
     {
          echo "<script language=\"javascript\">";
         echo "alert('mot de passe ou nom utilistaur  incorect')";
         echo "</script>";
         header('Location:connexion_sql.php');

       }
        else {  include("header.php");


                 $_SESSION['id']=$compte_existe['id'];
                 $_SESSION['pseudo']=$user;

              }
    }

?>





</div>
