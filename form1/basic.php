<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php 
        <?php
            define("pi",3.14);
            echo" hello world this is printed by php";
            // secret code

            $variable1=4;
            $variable2=5;
            echo $variable1;  //dynamic in nature //no need of data type
            echo $variable2;
            // echo $variable1+$variable2;   //not at all case sensative

            // operators in php

            // arthimatic operator
            echo"<br>";
            echo"the value of variable1+variable2 is";
            echo $variable1+$variable2;
            echo"<br>";
            echo"the value of variable1-variable2 is";
            echo $variable1-$variable2;echo"<br>";
            echo"the value of variable1/variable2 is";
            echo $variable1/$variable2;echo"<br>";
            echo"the value of variable1*variable2 is";
            echo $variable1*$variable2;

            // assignment operator
            echo"<br>";
            $new=$variable1;
            // $new+=1;
            // $new-=1;
            // $new*=2;

            echo"The value of new var is ";
            echo $new;
            

            /* // comparison operator 
            
            echo"<h1>Comparison operator<h1>"; */
            echo "<br>";
            echo "the value of 1==4 is";
            echo var_dump(1==4);  //to present value and type

            echo "<br>";
            echo "the value of 1!=4 is";
            echo var_dump(1!=4); 
            echo "<br>";
            echo "the value of 1<=4 is";
            echo var_dump(1<=4); 
            echo "<br>";
            echo "the value of 1>=4 is";
            echo var_dump(1>=4); 



            
            // incerement decrement operator 
           /*  echo "<br>";
            echo $variable1--;
            echo "<br>";
            echo $variable1++;
            echo "<br>";
            echo --$variable1;
            echo "<br>";
            echo $variable1;
            echo ++$variable1; */

            // logical operator
            /* and &&
            or ||
            xor ! */
            echo "<br>";
            // $var= (true && true);
            // $var=(false && true) ;
            //  $var=(false && false) ;
             
            // $var=(false xor false);  //if both are same then false
            // $var=(true xor false);
            // $var=(true xor true);

            // echo var_dump($var);
            
            
        ?>



         <?php
            //data types in php
            /* 1.string
            2.integer
            3.float
            4.boolean
            5.array
            6.object */

            echo'This is data types <br>';
            $var='this is a string';
            echo var_dump($var);

            echo'<br>';
            $var2 = 64 ;
            echo var_dump($var2);

            echo'<br>';
            $var2 = 64.55 ;
            echo var_dump($var2);

            echo'<br>';
            $var2 = true ;
            echo var_dump($var2);
            
            echo'<br>';
            echo pi;

         ?>







    </div>
</body>
</html>