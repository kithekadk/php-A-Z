<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>This is the introduction</h1> -->
<form action="" method="get">
    <label for="">Name:</label>
    <input type="text" name="name" id=""><br>
    <label for="">Email:</label>
    <input type="email" name="email" id=""><br>
    <label for="">Phone Number:</label>
    <input type="number" name="phone" id=""><br>
    <input type="number" name="age" id=""><br>
    <button type="submit" name="btnsubmit">SUBMIT</button>
</form>
    <?php
    $name = "Patrick Mwaniki";
        if (isset($_GET['btnsubmit'])){
            $name = $_GET['name'];
            $email = $_GET['email'];
            $phonenumber = $_GET['phone'];

            $age = $_GET['age'];

            switch($age){
                case $age<20:
                    echo "You are young";
                    break;
                case $age<30:
                    echo "Youth";
                    break;
                case $age>30:
                    echo "We mzee";
                    break;
                default:
                    echo "Old";
            }
        }

        // echo "This is the introduction";
        echo "<h1>";
        echo "This is the introduction";
        echo "</h1>";


        print "This is the introduction2";

        
        $age = 20;

        echo "<br/>";

        echo "My name is $name and my age is $age","<br/>";
        // echo "My name is $name and my age is $age";
        // echo "<br/>";
        // echo "My name is $name and my age is $age";
        // echo "<br/>";
        // echo "My name is $name and my age is $age";
        // echo "<br/>";
        // echo "My name is $name and my age is $age";
        // echo "<br/>";
        // echo "My name is $name and my age is $age";
        // echo "<br/>";
        // echo "My name is $name and my age is $age";
        // echo "<br/>";
        // echo "My name is $name and my age is $age";
        // echo "<br/>";
        // echo "My name is $name and my age is $age";
        // echo "<br/>";
        // echo "My name is $name and my age is $age";
        // echo "<br/>";

        //ARRAY
        $cars = ['Subaru', 'BMW', 'Volvo'];
        var_dump($cars);
        echo "<br/>";
        echo count($cars);
        echo "<br/>";

        $age = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
        echo $age['Peter'];

        foreach($age as $key => $value){
            echo "Key = $key and Value = $value";
            echo "<br>";
        }

        //Mutidimensional
        $cars = array (
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
          );

        echo $cars[3][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";

        //looping multi-dimesnsional
        for ($row = 0; $row < count($cars); $row++){
            echo "<p><b> Row number $row</b></p>";

            echo "<ul>";
                for ($col = 0; $col<3; $col++){
                    echo "<li>" .$cars[$row][$col]."</li>";
                }
            echo "</ul>";
        }

        $fruits =['oranges', 'ovacadoes'];
        array_push($fruits, 'mangoes');
        print_r($fruits);

//FUNCTIONS
        function sayHi($name){
            echo "Hello $name";
        }

        sayHi("Dan");

        function cube ($num){
            return $num*$num*$num;
        }

        echo cube(2);

        //IF STATEMENTS

        $isMale = true;
        $isTall = true;

        if($isMale && !$isTall){
            $name="Adam";
        }else if($isMale && $isTall){
            $name="Abel";
        }else{
            $name="Eve";
        }

        echo $name , "<br>";

        //LOOPS

        $index=1;

        while ($index<=5){
            echo "$index <br>";
            $index ++;
        }

        $index = 1;

        do{
            echo "$index <br>";
            $index ++;
        }while($index<=5);

        for ($index =1; $index <=5; $index ++){
            echo "$index <br>";
        }
    ?>
</body>
</html>