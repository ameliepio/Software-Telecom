<?php

// si on envoi des donnees, je les transliterator_transliterate
include('../vue/forms_project.php');
include ('../model/project_function.php');
include ('../model/task.php');

if (isset($_POST['name_project']) AND isset($_POST['manager_project']) AND isset($_POST['city']) AND isset($_POST['description'])AND isset($_POST['start_date'])AND isset($_POST['end_date'])){

  Insertproject($_POST['name_project'],$_POST['manager_project'],$_POST['city'],$_POST['description'],$_POST['start_date'],$_POST['end_date']);
  }
  else{
      echo 'not good';
  }


// //formulaire tâches
//
  if (isset($_POST['task_description']) AND isset($_POST['deadline'])){

  Inserttask($_POST['task_description'],$_POST['deadline']);
  // echo "ok";
  }
  else{
        echo 'bad';
    }

//AFFICHAGE projet

$affichage= Selectproject();

// var_dump  ($affichage);

//faire une foreach


foreach ($affichage as $affichage){

 echo $affichage;

}
