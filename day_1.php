<?php

$lines = file('input.txt');
$totalValue = 0;

foreach($lines as $line){
    
    echo $line .'<br>';
    $firstNumber;
    $lastNumber;
    $currentChar;
    $amount;

    //just testing
    for($x=0; $x < strlen($line); $x++){

        $currentChar = substr($line,$x,1);

        if (is_numeric($currentChar)) {

            if (is_null($firstNumber)){
                $firstNumber = $currentChar;
            } else{
                $lastNumber = $currentChar;
            }
        }
    }

    echo "First number ". $firstNumber." last number" . $lastNumber . '<br>';

    $lastNumber = isset($lastNumber) ? $lastNumber : $firstNumber;
    $amount = $firstNumber . $lastNumber;

    $totalValue += $amount;
    echo "Current total value : ".$totalValue . '<br>';
    $firstNumber = null;
    $lastNumber = null;
}

echo "The total value is : " . $totalValue . '<br>';