
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $a=$_GET['num1'];
    $c=$_GET['num2'];
    $b=$_GET['num3'];
// if($c=="+"){
//     echo $a +$b;
// }
// elseif($c=="-"){echo $a - $b;}
// elseif($c=="*"){echo $a * $b;}
// else{
//     echo "The symbol is incorrect";
// }
    switch($c){
        case "+":
            echo $a +$b;
            break;
        case "-":
            echo $a -$b;
            break;
        case "*":
            echo $a *$b;
            break;
            default:echo "the symble is incorrect";

    }
    

      ?>
</body>
</html>

