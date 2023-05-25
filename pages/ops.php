<?php

require("getToDos.php");
require("connection.php");


 if(isset($_GET['success']) && $_GET['success'] == 'created'){
    $todo = new ToDos();

    $title = $_POST['title'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $details = $_POST['details'];

    if($todo->getToDos($title, $day, $month, $year, $details)){

      header("Location: index.php");

      echo("Done!");

    }else{
      echo("Error!");
    }
  }



?>