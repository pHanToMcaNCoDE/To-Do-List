<?php


class ToDos{

    public function getToDos($title, $day, $month, $year, $details){

         $connect = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

        if($connect->connect_error){
            echo("cannot connect to the database! ".$connect->connect_error);
        }else{

            $title = $connect->real_escape_string($title); 
            $day = $connect->real_escape_string($day);
            $month = $connect->real_escape_string($month);
            $year = $connect->real_escape_string($year);
            $details = $connect->real_escape_string($details);


            // $adminID = $this->genAdminID();
            // $stmt = $connect->prepare("INSERT INTO `Lists`(`title`, `day`, `month`, `year`, `details`) VALUES (?, ?, ?, ?, ?, ?)");

            // $stmt->bind_param("sisis", $tile, $day, $month, $year, $details);
            // $stmt->execute();

            $sql = "INSERT INTO `Lists`(`title`, `day`, `month`, `year`, `details`) VALUES('".$title."', '".$day."', '".$month."', '".$year."', '".$details."');";

            $connect->query($sql);

            return true;
        }
        $connect->close();
    }
}
?>