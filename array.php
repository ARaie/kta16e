<?php

require 'function.php';
home();

$month = "veebruar";
$test = array('kolmapäev', 3.14, $month, 8, "Klass nr A-210" );

print_r($test);
echo "<br>";
var_dump($test);
echo "<br>";
echo $test[0];
echo "<br>";
$test[] = "uus massiivi liige";
print_r($test);
echo "<br>";

//Sidusmassiiv
$test_a = array('esimene' => 'Tauno', 'teine' => 'Ragnar', 'kolmas' => 'Kevin', 'neljas' => 'Kalle');
print_r($test_a);

//esimese massiivi väljatrükk kultuursel kombel
for ($i=0; $i < count($test); $i++){
    
    echo "<li>".$test[$i]."</li><br>"; 
}
foreach($test_a as $jrk => $name){
    
    echo "<li>".$name." on järjekorras ".$jrk."</li>";
}

$esta = "Eesti keel";
$mata = "Matemaatika";
$fyss = "Füüsika";
$hinded = array("Peeter" => array($esta => array(4, 4, 2, 4, 1), $mata => 4, $fyss => 3), "Mari" => array($esta => 5, $mata => 3, $fyss => 4), "Jüri" => array($esta => 3, $mata => 2, $fyss => 2));

echo $hinded['Peeter'][$esta][1]."<br>";

var_dump($hinded);

//print_r massiivide lihtne väljatrükk
print_r(array_keys($hinded));
echo "<br>";
print_r(array_values($hinded));
echo "<br>";

$hinded_id = array_keys($hinded);
for ($i=0; $i < count($hinded_id); $i++) {
    
    echo $hinded_id[$i].":<br>";
    foreach($hinded[$hinded_id[$i]] as $aine => $hinne) {
        echo $aine.": ".$hinne."<br>";
    }
}

?>