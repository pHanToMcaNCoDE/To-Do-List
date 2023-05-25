<?php

// require("getToDos.php");

// $ttErr = $dErr = $mErr = $yErr = $dtErr = '';

// if(isset($_POST['submit'])){

//     $ttl = $_POST['title'];
//     $day = $_POST['day'];
//     $month = $_POST['month'];
//     $year = $_POST['year'];
//     $details = $_POST['details'];
// }

// if(empty($ttl)){
//     $ttErr = "This field is required!";
// }

// if(empty($ttl)){
//     $ttErr = "This field is required!";
// }

// if(empty($ttl)){
//     $ttErr = "This field is required!";
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List || By pHanToMcaNCoDE</title>

    <!-- Linking Css File -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Link from Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/0d3e4186a7.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- Navigation Bar -->
    <nav id="nav">
        <div class="max-width">
            <div class="logo">
                <a href="#">phantomcancode</a>
            </div>
            <div class="heading" id="heading">
                <a href="index.php">Tick-it!</a>
            </div>
        </div>
    </nav>

    <!-- Body Of The To - Do List -->
    <section class="body">
        <div class="max-width">
            <div class="left">
                <h2 id="hero-head">Let's set our goals & Get them done!</h2>
            </div>
            <div class="right">
                <a href="createList.php">+</a>
            </div>
        </div>
        <!-- <p>Do you wish to create a list now?</p> -->
        <!-- <button type="submit" class="createList">Create List</button> -->
        <a href="form.php" class="createList">Create List</a>


        <?php 

                require("connection.php");

                $c = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

                if($c->connect_error){
                    die("Cannot connect to the database! ".$c->connect_error);
                }else{
                    $sql = "SELECT * FORM `Lists`;";

                    $result = $c->query($sql);

                    
                    while($row = $result->fetch_assoc()){

                        echo "<div class='tdlist'>
                                <div class='serial'>
                                     <h6>" .$row['serialNumber']. "</h6>
                                 </div>
                                |
                                 <div class='para1'>
                                    <p>Title: " .$row['title']. "</p>
                                </div>
                                |
                                <div class='para2'>
                                    <p>date: " .$row['day']. "  " .$row['month']. "  " .$row['year']. "</p>
                                </div>
                                <div class='icons'>
                                    <abbr title='View more'><i class='fa-solid fa-binoculars'></i></abbr>
                                    <abbr title='Edit'><i class='fa-solid fa-pen-nib'></i></abbr>
                                    <abbr title='Delete row'><i class='fa-solid fa-trash'></i></abbr>
                                 </div>
                            </div>";
                    }
                    $c->close();
                }
            ?>
    </section>




    <script src="js/action.js"></script>
</body>

</html>