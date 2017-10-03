<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<!-- mettre la carte qui affiche le projet dans la page d'accueil avec un boutton add task -->


<?php foreach ($affichage as $key => $resultat): ?>


<div class="row">

  <h2>List project</h2>
  <ul class="card" style="width:50%">
    <li>name_project: <?php  echo $resultat['name_project'];?></li>
    <li>manager_project: <?php  echo $resultat['manager_project'];?></li>
    <li>city: <?php  echo $resultat['city'];?></li>
    <li>description: <?php  echo $resultat['description'];?></li>
    <li>start_date: </li><?php  echo $resultat['start_date'];?></li>
    <li>end_date: </li><?php  echo $resultat['end_date'];?></li><br>
  </ul>
  </div>

<?php foreach ($task as $key => $result): ?>
  <div class="row">
  <h2>List task</h2>
  <ul class="tasks" style="width:50%">
    <li>task_description:<?php  echo $result['task_description'];?></li>
    <li>deadline: <?php  echo $result['deadline'];?></li>
</ul>
</div>
<?php endforeach; ?>
<?php endforeach; ?>




  <!-- <button type="button" onclick=href="forms_project.php">ADD TASK +</button> -->
<!-- ajouter une ligne avec les tâches  -->


  </body>
</html>
