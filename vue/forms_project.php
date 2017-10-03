    <!-- formulaire du projet qui part en bdd  -->
    <?php
require_once('header.php');

 ?>

 <div class="row">
    <div class="linkproject">
   <a href="formController.php"><strong>Add new project +</strong></a>
 </div>
      <!-- project form that starts in bdd -->
    <form action="formController.php" method="post">
        <input type="text" name="name_project" placeholder="name_project"> <br>
        <input type="text" name="manager_project" placeholder="manager_project"><br>
        <input type="text" name="city" placeholder="city"><br>
        <input type="text" name="description" placeholder="description"><br>
        <input type="text" name="start_date" placeholder="start_date"><br>
        <input type="text" name="end_date" placeholder="end_date"><br>

        <input type="submit" name="submitproject" value="envoyer">




<!-- formulaire tâche qui part en bdd -->
<!-- task form that start in bdd -->
<p>Task list</p>
<form action="formController.php" method="post">
    <input type="text" name="task_description" placeholder="task_description"> <br>
    <input type="text" name="deadline" placeholder="deadline"><br>


  <input type="submit" name="submittask" value="Add task">
  </form>
</form>

 </div>
<?php
require_once('footer.php');

?>
