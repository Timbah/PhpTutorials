<?php

$word = 'two65eightbkgqcsn91qxkfvgseven';
$arrayOfNumbers=array();
$lines = file('input.txt');
$totalValue = 0;

function append_number_to_position($data){
   
    $wordValue =0;
    $wordPosition = 0;
    $arrayOfNumbers=[];

   //Search for a word(number) from the data input
   //Conversions of word numbers to numeric value
   
   if (is_numeric(strrpos($data,"one"))) {

    $wordValue = 1;
    $wordPosition = strrpos($data,"one");

    $arrayOfNumbers[$wordPosition]= $wordValue;
    
   };
   
   if (is_numeric(strrpos($data,"two"))){
    
        $wordValue = 2;
        $wordPosition = strrpos($data,"two");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strrpos($data,"three"))){
    
        $wordValue = 3;
        $wordPosition = strrpos($data,"three");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

   if (is_numeric(strrpos($data,"four"))){
    
        $wordValue = 4;
        $wordPosition = strrpos($data,"four");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strrpos($data,"five"))){
    
        $wordValue = 5;
        $wordPosition = strrpos($data,"five");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strrpos($data,"six"))){
    
        $wordValue = 6;
        $wordPosition = strrpos($data,"six");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strrpos($data,"seven"))){
    
        $wordValue = 7;
        $wordPosition = strrpos($data,"seven");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strrpos($data,"eight"))){
    
        $wordValue = 8;
        $wordPosition = strrpos($data,"eight");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strrpos($data,"nine"))){
    
        $wordValue = 9;
        $wordPosition = strrpos($data,"nine");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

     //Saving converted words into a global array
     $GLOBALS['arrayOfNumbers'] = $arrayOfNumbers;

}

//Initializing global tracker of number of lines processed
$lineCount=1;

//Looping through each line of the text file on $lines

foreach($lines as $line){
    
    $firstNumber = null;
    $lastNumber = null;
    $currentChar= null;
    $amount = 0;
    $firstArrayNumber = null;
    $lastArrayNumber = null;
    $arrayCurrent =null;
    $arrayAmount = null;
    $firstArrPos = null;
    $lastArrPos = null;
    $firstNumPos = 0;
    $lastNumPos = 0;
    
    //Determine numeric values of word numbers on current line and save them on an array
    append_number_to_position($line);

    for($x=0; $x <= strlen($line); $x++){

        $currentChar = substr($line,$x,1);

        if (is_numeric($currentChar)) {
           // echo $currentChar . '<br>' ;
            $GLOBALS['arrayOfNumbers'][$x]= $currentChar;         
        }
        
    //     echo '<pre>';
    //     var_dump($GLOBALS['arrayOfNumbers']);
    //    echo '</pre>';
    }
    //Get a copy of the global array set with values processed from word numbers
    $arrayOfNumbers = $GLOBALS['arrayOfNumbers'];

    //  echo '<pre>';
    //  var_dump($GLOBALS['arrayOfNumbers']);
    // echo '</pre>';

   //Determine first,last word numbers and their positions on the current line,saved on the array
   for($index =0; $index < 101 ; $index++){

    if (isset($arrayOfNumbers[$index])){
        //echo "extracting array value : ". $arrayOfNumbers[$index].'<br>';
                
        if(is_null($firstArrayNumber)){
        
            $firstArrayNumber = $arrayOfNumbers[$index];
            $firstArrPos = $index;
       
           }else {
               $lastArrayNumber = $arrayOfNumbers[$index];
               $lastArrPos = $index;
       
           }
    }
   
   }
    
     echo"Line ". $lineCount."==========================" .'<br>';
     echo "First  array number ". $firstArrayNumber." last array number" . $lastArrayNumber . '<br>';
//     echo "First number ". $firstNumber." last number" . $lastNumber . '<br>';

    $lastArrayNumber = isset($lastArrayNumber) ? $lastArrayNumber : $firstArrayNumber;
    $amount = $firstArrayNumber . $lastArrayNumber;    
    $totalValue += $amount;

    $lineCount +=1;
}

echo "The total value is : " . $totalValue . '<br>';

// append_number_to_position($word);
// // echo strpos($word,"eight");

//   echo '<pre>';
//   var_dump($GLOBALS['arrayOfNumbers']);
//  echo '</pre>';