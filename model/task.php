<?php


require_once('../model/connexion_sql.php');


function Inserttask($task_description,$deadline){
  global $bdd;

  $requete = $bdd->prepare('INSERT INTO task(task_description,deadline,id_project)
    VALUES(:task_description,:deadline,:id_project)');
  try
  {

  $requete->execute(array(

        'task_description' => $task_description,

            'id_project' => '2',

        'deadline' => $deadline));
    }
    catch (Exception $e)
    {
      die($e->getMessage());
    }

}
function Selecttask(){
global $bdd;

$reponse = $bdd->query('SELECT * FROM task ORDER BY id DESC LIMIT 1');


  $result = $reponse->fetchAll();
  //
  return $result;

}
