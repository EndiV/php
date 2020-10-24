<?php define("MyWebsite","Web1");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=MyWebsite;?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

/*echo '<p>123</p>';
echo "hello";
$color="blue";
$numer=123;
echo " qielli eshte ".$color." ";
echo gettype( $numer)
?>
<?php $arr=[1,2,3,4,5]; 
var_dump($arr[2]);
?>
<?php
$colors = array(
    "red"=>"ff0000",
    "blue"=>"0000ff",
    "green"=>"00ff00"
);
echo"<pre>";
var_dump($colors);

echo"</pre>"
*/

$colors = array(
    "red"=>"#ff0000",
    "blue"=>"#0000ff",
    "green"=>"#00ff00",

);
foreach($colors as $key=>$item){
  

if ($key=="red"){
    echo"<h1 style ='color:$item'>$key</h1>";
}
else
if ($key=="blue"||"green"){
    echo"<h1 style ='color:$key'>$item</h1>";
}

else{
    echo"<h1> $key</h1>";
}
}

function myFunction(){
    
}


?>

</body>
</html>