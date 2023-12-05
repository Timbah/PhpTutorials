<?php

$word = 'two65eightbkgqcsn91qxkfvgseven';
$arrayOfNumbers=array();
$lines = file('input.txt');
$totalValue = 0;

function append_number_to_position($data){
   
    $wordValue =null;
    $wordPosition = null;
    $arrayOfNumbers = null;

   //Search for a word(number) from the data input
   //Conversions of word numbers to numeric value
   
   if (is_numeric(strpos($data,"one"))) {

    $wordValue = 1;
    $wordPosition = strpos($data,"one");

    $arrayOfNumbers[$wordPosition]= $wordValue;

   };
   
   if (is_numeric(strpos($data,"two"))){
    
        $wordValue = 2;
        $wordPosition = strpos($data,"two");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"three"))){
    
        $wordValue = 3;
        $wordPosition = strpos($data,"three");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

   if (is_numeric(strpos($data,"four"))){
    
        $wordValue = 4;
        $wordPosition = strpos($data,"four");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"five"))){
    
        $wordValue = 5;
        $wordPosition = strpos($data,"five");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"six"))){
    
        $wordValue = 6;
        $wordPosition = strpos($data,"six");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"seven"))){
    
        $wordValue = 7;
        $wordPosition = strpos($data,"seven");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"eight"))){
    
        $wordValue = 8;
        $wordPosition = strpos($data,"eight");
    
        $arrayOfNumbers[$wordPosition]= $wordValue;
    };

    if (is_numeric(strpos($data,"nine"))){
    
        $wordValue = 9;
        $wordPosition = strpos($data,"nine");
    
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
    $firstArrPos = 0;
    $lastArrPos = 0;
    $firstNumPos = 0;
    $lastNumPos = 0;
    

    //Determine first,last numeric numbers and their positions on the current line
    for($x=0; $x <= strlen($line); $x++){

        $currentChar = substr($line,$x,1);

        if (is_numeric($currentChar)) {

            if (is_null($firstNumber)){
                $firstNumber = $currentChar;
                $firstNumPos = $x;
            } else{
                $lastNumber = $currentChar;
                $lastNumPos = $x;
            }
        }
    }

    //Determine numeric values of word numbers on current line and save them on an array
    append_number_to_position($line);

    //Get a copy of the global array set with values processed from word numbers
    $arrayOfNumbers = $GLOBALS['arrayOfNumbers'];

//     echo '<pre>';
//     var_dump($GLOBALS['arrayOfNumbers']);
//    echo '</pre>';

   //Determine first,last word numbers and their positions on the current line,saved on the array
   for($index =0; $index < 101 ; $index++){

    if (isset($arrayOfNumbers[$index])){

        if(is_null($firstArrayNumber)){
        
            $firstArrayNumber = $arrayOfNumbers[$index];
            $firstArrPos = $index;
       
           }else {
               $lastArrayNumber = $arrayOfNumbers[$index];
               $lastArrPos = $index;
       
           }
    }
   
   }
    //echo "First  array number ". $firstArrayNumber." last array number" . $lastArrayNumber . '<br>';
    //echo "First number ". $firstNumber." last number" . $lastNumber . '<br>';
   //195one 
   //bcdspxmhzsqfhhlghmqh5794blxm

   //Determine the final first and last number to form a single digit i.e. 1 and 2 = 12

    $lastNumber = isset($lastNumber) ? $lastNumber : $firstNumber;
    $firstNumber = isset($firstNumber) ? $firstNumber : 0;
    $lastNumber = isset($lastNumber) ? $lastNumber : 0;
        

    if ($firstNumPos < $firstArrPos){
        $firstNumber = $firstNumber;
    }

    if($firstNumPos > $firstArrPos){
        $firstNumber = isset($firstArrayNumber) ? $firstArrayNumber : $firstNumber;   
    }

    if($lastNumPos > $lastArrPos){
        $lastNumber = $lastNumber;
    }

    if($lastNumPos < $lastArrPos){
        $lastNumber = isset($lastArrayNumber) ? $lastArrayNumber : $lastNumber;
    }
  
    if($lastNumPos < $firstArrPos && $lastArrPos ==0 ){
        $lastNumber = $firstArrayNumber;
    }

    echo"Line ". $lineCount."==========================" .'<br>';
    echo "First  array number ". $firstArrayNumber." last array number" . $lastArrayNumber . '<br>';
    echo "First number ". $firstNumber." last number" . $lastNumber . '<br>';


    $amount = $firstNumber . $lastNumber;    
    $totalValue += $amount;
    echo "The total from this line is ". $amount . " and the Running total is " . $totalValue . '<br>';
   // echo "Current total value : ".$totalValue . '<br>';
    $firstNumber = null;
    $lastNumber = null;

    $lineCount +=1;
}

echo "The total value is : " . $totalValue . '<br>';

// append_number_to_position($word);
// // echo strpos($word,"eight");

//   echo '<pre>';
//   var_dump($GLOBALS['arrayOfNumbers']);
//  echo '</pre>';