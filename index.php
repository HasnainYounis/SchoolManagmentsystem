<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
       <form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

    <?php
   $a =5;
    $b =6;
    $sum = $a+$b;
    echo ("The sum of two number is:".$sum ."<br>");
    ECHO ("The sum of two number is:".$sum);
    
 
// $cars = ["mehran","civic","sonata"];
// foreach($cars as $car){
//     echo $car."<br>";
// }
//  echo $cars[1];
//  print_r($cars);


//    function Classmarks($Math,$English,$computer){
//      $total= 300;
//      $sum=$Math+$English+$computer;
//      $avg = $sum/3;
//      $percentage= ($sum/$total)*100;
//      echo("The sum of the all books marks are:".$sum."<br>");
//      echo("The Average of the all books marks are:".$avg."<br>");
//      echo("The Percantage of the all books marks are:".$percentage."<br>");
//      if($avg>=80){
//         echo("your grade is A+ With average :".$avg."<br>");
//      }elseif($avg>=50){
//         echo("your grade is B+ With average :".$avg."<br>");
//      }else{
//         echo("your are fail With average :".$avg."<br>");
//      }

//    }
//    Classmarks(80,85,90)

    //  $Math = 9;
    //  $English=85;
    //  $computer=98;
    //  $total= 300;
    //  $sum=$Math+$English+$computer;
    //  $avg = $sum/3;
    //  $percentage= ($sum/$total)*100;
    //  echo("The sum of the all books marks are:".$sum."<br>");
    //  echo("The Average of the all books marks are:".$avg."<br>");
    //  echo("The Percantage of the all books marks are:".$percentage."<br>");
    //  if($avg>=80){
    //     echo("your grade is A+ With average :".$avg."<br>");
    //  }elseif($avg>=50){
    //     echo("your grade is B+ With average :".$avg."<br>");
    //  }else{
    //     echo("your are fail With average :".$avg."<br>");
    //  }


    // for($i=1;$i<=10;$i++){
    //     echo( "value:".$i."<br>");
    // }

    // $num = 13;
    // $rang= 20;
    // for($i=1;$i<=$rang;$i++){
    //     echo($num ."*".$i."=". $num*$i."<br>");

    // }


    // $i=1;
    // while($i<=10){
    //      echo( "value:".$i."<br>");
    //      $i++;
    // }
    // $i=1;
    // do{
    //      echo( "value:".$i."<br>");
    //      $i++;

    // }while($i<=12)

    // $a =5;
    // $b =6;
    // $sum = $a+$b;
    // echo ("The sum of two number is:".$sum ."<br>");
    // ECHO ("The sum of two number is:".$sum);
    // ?>
</body>
</html>