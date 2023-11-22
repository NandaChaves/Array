<!DOCTYPE html>
<html>
<body>
<?php

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
"Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>
"Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" =>
"Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid",
"Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia",
"Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" =>
"Vienna", "Poland"=>"Warsaw");
foreach($ceu as $y => $y_value)
{   echo "The capital of " .$y . " is " . $y_value;
    echo "<br>";}   
    
$name=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
 asort($name);
    echo "<br>Ordem crescente de valor<br>";
    foreach($name as $key =>$val)
             {echo "$key = $val <br>";} 
    
    echo "<br>Ordem crescente de chave<br>";
 ksort($name);
    foreach($name as $x => $x_value)
    {   echo $x . "=" .$x_value;
        echo "<br>";}
    
   echo "<br>Ordem decrescente de chave<br>";
 krsort($name);
    foreach($name as $x => $x_value){
        echo  $x . "=" . $x_value;
        echo "<br>";}
    
   echo "<br>Ordem decrescente de valor<br>";
   arsort($name);
     foreach($name as $x => $x_value){
        echo  $x . "=" . $x_value;
        echo "<br>";}
    
  echo "<br>";
   $color = array('white', 'green', 'red');
   foreach($color as $value)
   {echo "<ul><li>Cores = $value </li></ul>";}
    
   
    
?>

</body>
</html>