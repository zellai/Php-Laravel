
<?php
// $var = [1,2,3];

// if ($var > 50){
//     print_r('It is greater than 50');
// } else if ($var < 50) {
//     print_r('It is less than 50');
// }

// $fruits = ['grapes', 'apple', 'orange', 'pear'];

// for($i=0;$i<=$var[$i];$i++) {
//     print_r($var[$i]);
// }

// while($var <= 5) {
//     echo "The number is: $var <br>";
//     $var++;
// }

// do {
//     echo "The number is: $var \n";
//     $var++;
// }while ($var<= 5);

// foreach ($fruits as $value) {
//     echo "$value \n";
// }
// for ($var=0;$var<10;$var++){
//     if ($var == 4) {
//         break;
//     }
//     echo "The number is: $var \n";
// }


function nameList($names,$year) {    
    foreach ($names as $index => $name){
        echo "$index -- $names[$index] Espera. Born in $year[$index] .\n";
    }
    
}

$names = ['Ezel','Christian Rey'];
$year = ['1990', '1987'];
// familyName($names);
nameList($names, $year);f
