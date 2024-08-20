<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <p>this is my paragraph looking to see this</p>

    <?php
  $name = "Paul";
  $var = "";
  $pitt  = "libebre cage";
  $var2 = "paulindricks";

  if(isset($name)){
    echo "the name is set</br>";
  }
  
  else{
    echo "the name is not set<br/>";
  }

if(empty($var)){
    echo "the name is empty</br>";
}else{
     echo "the name is not empty</br>";
    
}

if(!empty($pitt)){
    echo "is not empty at all</br>";
}else{
    echo "is empty at all buddy</br>";
}

if(!isset($var2)){
    echo "seted<br/>";
}else{
    echo "not seted<br/>";
}
?>
</body>
</html>