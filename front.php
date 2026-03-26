<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function Classmarks($Math,$English,$computer){
     $total= 300;
     $sum=$Math+$English+$computer;
     $avg = $sum/3;
     $percentage= ($sum/$total)*100;
     echo("The sum of the all books marks are:".$sum."<br>");
     echo("The Average of the all books marks are:".$avg."<br>");
     echo("The Percantage of the all books marks are:".$percentage."<br>");
     if($avg>=80){
        echo("your grade is A+ With average :".$avg."<br>");
     }elseif($avg>=50){
        echo("your grade is B+ With average :".$avg."<br>");
     }else{
        echo("your are fail With average :".$avg."<br>");
     }

   }
   Classmarks(80,85,90)
    ?>
    
</body>
</html>