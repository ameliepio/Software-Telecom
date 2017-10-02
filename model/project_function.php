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
function Selectproject(){
global $bdd;

$requete = $bdd->query('SELECT * FROM projet ORDER BY ID DESC LIMIT 10');


  $resultat = $requete->fetchAll();
  //
  return $resultat;

}
