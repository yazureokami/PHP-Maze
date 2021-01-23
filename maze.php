<?php
/**
 * Maze.php
 *
 * This file contains the function to show maze
 * 
 *
 * @file       maze.php
 * @author     Aditya Ekaputra
 * @date       23/01/2021
 * @version    1.0.0
 */

/**
* ABOUT
* =====
* This was written to complete a challenge of test recruitment
*
* HOW TO USE 
* ==========
* In a Windows environment, assuming that you have php in
* your PATH settings, you just need to run the following
* command in the command prompt
* php maze.php
* and follow the step on
*
*/


$number = 2;
$stdin = fopen('php://stdin', 'r');
echo "Silahkan masukan ukuran maze dalan integer positif \nMin Input 5, Max input is 190\n";
$str = stream_get_contents($stdin, 3);
$count = (int)$str;
$message = null;
if($count < 5){
    $message = "Min Input 5\n";
}else if($count > 190){
    $message = "Max Input 190\n";
}

echo ($message != null) ? $message : "";
($message != null) ? exit() : "";

echo "\n\nResult\n";

$wall = "@";
$street = " ";

$maze = array();

$x = 0;

for($i = 1; $i <= $count; $i++){
    $n = $i % 2;
    for($j = 1; $j <= $count; $j++){
        if($n == 0){
            echo ($j == 1 || $j == $count) ? $wall : $street;
        }else{
            echo ($x == 0 && $j == 2) ? $street : (($x == 1 && $j == $count-1) ? $street : $wall);
        }
    }
    ($x == 0 and $n != 0) ? $x = 1 : (($x ==1 && $n != 0) ? $x = 0 : "");
    echo "\n";
}