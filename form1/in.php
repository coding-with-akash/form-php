<?php

   $server="127.0.0.1:3307";
   $username="root";
   $password="";
   $db="travel";

   $con=mysqli_connect($server,$username,$password,$db);

   if(!$con){
       die("connection to this database failed due to". mysqli_connect_error());
   }

   echo"success connecting to db";


        // $name = $_POST['name'];
        // $gender = $_POST['gender'];
        // $age = $_POST['age']; 
        // $email = $_POST['email'];
        // $phone = $_POST['phone'];
        // $desc = $_POST['desc'];


        // // $sql="INSERT INTO `participant.participant` ( `name`, `age`, `gender`, `email`, `phone`, `desc`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp()) ";

        // $sql="INSERT INTO `participant` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";
        // echo $sql;



//  if(isset($_POST['submit'])){

  /*   if(!empty($_POST['name']) &&  !empty($_POST['gender']) && !empty($_POST['age']) &&  !empty($_POST['email']) &&  !empty($_POST['phone']) &&  !empty($_POST['desc'])){

        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $age = $_POST['age']; 
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $desc = $_POST['desc'];
    
        $sql="INSERT INTO `participant` ( `name`, `age`, `gender`, `email`, `phone`, `desc`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp()) ";
        


        echo $sql;


    }
    else{
        echo"all fields are required";
    } */


?>