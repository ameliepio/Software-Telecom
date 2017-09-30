<?php
// creatie function Insertproject
require_once('../model/connexion_sql.php');

function Insertproject ($name_project,$manager_project,$city,$description,$start_date,$end_date){
  global $bdd;
    // Insert project in bdd

  $req = $bdd->prepare('INSERT INTO projet(name_project,manager_project,city, description,start_date,end_date)
    VALUES(:name_project,:manager_project,:city,:description,:start_date,:end_date)');
  try
  {


    $req->execute(array(

        'name_project' => $name_project,

        'manager_project' => $manager_project,

        'city' => $city,

        'description'=> $description,

        'start_date'=> $start_date,

        'end_date'=> $end_date));
    }
    catch (Exception $e)
    {
      die($e->getMessage());
    }

}


// // inserer les projet dans la page d'accueil
//
// function Selectproject($name_project,$manager_project,$city,$description,$start_date,$end_date){
// global $bdd;
//
// $requete = $bdd->prepare('SELECT * FROM projet WHERE name_project = :name_project AND manager_project=:manager_project AND city=:city AND description=:description AND start_date=:start_date AND end_date=:end_date ');
//
//
// $requete->execute(array(
//
//   'name_project' => $name_project,
//
//   'manager_project' => $manager_project,
//
//   'city' => $city,
//
//   'description'=> $description,
//
//   'start_date'=> $start_date,
//
//   'end_date'=> $end_date));
//
//     $resultat = $requete->fetch();
//
//     return $resultat;
//
//   }



      // Insert task in bdd

  function Inserttask ($task_description,$deadline){
    global $bdd;

    $req = $bdd->prepare('INSERT INTO task(task_description,deadline)
      VALUES(:task_description,:deadline)');
    try
    {

    $req->execute(array(

          'task_description' => $task_description,

          'deadline' => $deadline,));
      }
      catch (Exception $e)
      {
        die($e->getMessage());
      }

  }
