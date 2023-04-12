<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- <h1>This is the introduction</h1> -->
<!-- <form action="" method="get">
    <label for="">Name:</label>
    <input type="text" name="name" id=""><br>
    <label for="">Email:</label>
    <input type="email" name="email" id=""><br>
    <label for="">Phone Number:</label>
    <input type="number" name="phone" id=""><br>
    <button type="submit" name="btnsubmit">SUBMIT</button>
</form> -->
    <?php
        //     $name = $_GET['name'];
        //     $email = $_GET['email'];
        //     $phonenumber = $_GET['phone'];


        // // echo "This is the introduction";
        // echo "<h1>";
        // echo "This is the introduction";
        // echo "</h1>";


        // print "This is the introduction2";

        
        // $age = 20;

        // echo "<br/>";

        // echo "My name is $name and my age is $age","<br/>";  
        
        // // STRINGS


        // $phrase = "Session on Array and Strings";
        // echo strtoupper($phrase) , "<br>";

        // echo strtolower($phrase) , "<br>", "<br>";

        // print strlen($phrase);
        // echo "<br>";

        // print str_word_count($phrase);
        // echo "<br>";

        // $phrase[1] = "o";
        // $phrase[3] = "x";

        // echo $phrase;
        // echo "<br>";

        // // echo str_replace("and", "&", $phrase);
        // $phrase = str_replace("and", "&", $phrase);
        // echo $phrase;
        // echo "<br>";


        // // ARRAYS

        // $cars = array("audi", "bmw", "mercedes");
        // $users = ["joel", "joy", "patrick"];

        // echo $users[2], "<br>";

        // $users[2][0] = strtoupper($users[2][0]);
        // // echo $users
        // echo $users[2] , "<br>";

        // array_push($users, "brian", "mwaniki");
        // print_r ($users);
        // echo "<br>";

        // array_unshift($users, "nicholas");

        // echo "<pre>";
        //     print_r($users);
        // echo "</pre>";
        // echo "<br>";

        // echo "<pre>";
        //     var_dump($users);
        // echo "</pre>";

        // // Removing items from an array
        // array_pop($users);
        // echo "<pre>";
        //     print_r($users);
        // echo "</pre>";

        // array_shift($users);
        // echo "<pre>";
        //     print_r($users);
        // echo "</pre>";

        // array_splice ($users, 2,2);
        // echo "<pre>";
        //     echo "<h1> Using splice</h1>";
        //     print_r($users);
        // echo "</pre>";
        

        // //Length of an array
        // echo count($users) , "<br>";

        // // ASSOCIATIVE ARRAY

        // $agearray = ["Nicholas"=> 10, "Kimani" => 30, "Mwaniki"=>50];


        // echo $agearray['Kimani'] , "<br>";

        // foreach ($agearray as $key => $value){
        //     echo "Name = $key and Age = $value <br>";
        // }

        // //MULTIDIMENSIONAL ARRAYS

        // $cars = [
        //     ['Bmw', 50, 30],
        //     ['Audi', 30, 10],
        //     ['Probox', 20, 1],
        //     ['Trucks', 10, 2]
        // ];

        // echo $cars[2][0] , " Initial stock ".$cars[2][1], " current stock ".$cars[2][2];

        // for ($row = 0; $row < count($cars); $row ++){
        //     echo "<p> <b> Row number $row </b> </p>";
        //     echo "<ul>";
        //         for ($col = 0; $col<3; $col++){
        //             echo "<li>".$cars[$row][$col]. "</li>";
        //         }
        //     echo "</ul>";
        // }

    ?>

<form action="" method="get">
    <label for="">Input your name</label>
    <input type="text" name="name" id=""><br>
    <label for="">Input your grade</label>
    <input type="text" name="grade" id=""><br>

    <button type="submit" name="btnsubmit">Submit</button>
</form><br>
    <?php

        if (isset ($_GET['btnsubmit'])){
            $name = $_GET['name'];
            $grade = $_GET['grade'];

            switch($grade){
                case $grade == "A":
                    echo "Congratulations, good work";
                    break;
                case $grade == "B":
                    echo "Good trial";
                    break;
                case $grade == "C":
                    echo "Keep up";
                    break;
                default:
                    echo "Pull up your socks";
            }
        }

        echo "<br>";
        function welcomeUser($name){
            echo "Welcome $name", "<br>";
        }

        welcomeUser($name);

        function findPerimeter($len, $wid){
            return ($len*2) + ($wid*2);
        }

        $result = findPerimeter(2,3);

        echo "$result" , "<br>";

        $isFemale = true;
        $iTall = false;

        if($isTall){
            echo "You are tall";
        }else if($isMale){
            echo "What's up man";
        }else if($isFemale){
            echo "Hey, girl";
        }else{
            echo "You are short, but what's your gender?";
        }


        echo "<br>";

        if($isFemale || $isTall){
            echo "Hey tall Girl";
        }else if($isTall && $isMale){
            echo "Hey tall guy";
        }else{
            echo "Hello short whoever";
        }

        echo "<br>";
        // LOOPING
        $index = 1;

        while($index <= 5){
            echo "$index <br>";
            $index++;
        }

        $index = 1;

        do {
            echo "$index <br>";
            $index ++;
        }while($index<=5);

        for ($index=1; $index <=5; $index++){
            echo "$index <br>";
        }
    ?>
</body>
</html>