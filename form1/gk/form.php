<?php
        $server="127.0.0.1:3307";
        $username="root";
        $password="";
        $db="travel";
     
        $con=new mysqli($server,$username,$password,$db);

        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $age = $_POST['age']; 
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $desc = $_POST['desc'];
     
        if(!$con){
            die("connection to this database failed due to". mysqli_connect_error());
        }
        else
        {
             echo"success connecting to db";
             
        }
     
     
        $sql="INSERT INTO `test` (`name`, `age`, `gender`, `email`, `phone`, `desc`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc')";

        $result=mysqli_query($con,$sql);

        if($result){
            echo "successful";
        }
       else{
           echo "fail";
       }
        

        
        

       


    ?>