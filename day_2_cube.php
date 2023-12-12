<?php

const red_cubes = 12;
const green_cubes = 13;
const blue_cubes = 14;

$gameId = null;
$sumOfId = 0;
$data = file('cubes_input.txt');

//Extract game id from string...pattern game 1:.....
function get_game_id($line){
    
    $currentGameId = substr($line,0,strpos($line,":"));

    return $currentGameId;
}

//Extracts number from a given string
function get_game_id_number($gameIdStr){

    $gameIdNumber = (int)filter_var($gameIdStr, FILTER_SANITIZE_NUMBER_INT); 

    return $gameIdNumber;
}


//Read line and process it

foreach($data as $line){

    //Extract game sets separated by ;
   //Game 1: 4 green, 2 blue; 1 red, 1 blue, 4 green; 3 green, 4 blue, 1 red; 7 green, 2 blue, 4 red; 3 red, 7 green; 3 red, 3 green
  
   $gameId    = get_game_id($line);
   $colonPos  = strpos($line,":") + 1;
   $lineRed   = 0;
   $lineBlue  = 0;
   $lineGreen = 0;
   
   
    $gameSet = str_getcsv(substr($line,strpos($line,":")+1),";"); 
    echo 'Current game set: ';

     echo '<prev>';
     var_dump($gameSet);
     echo '</prev>' . '<br>';
    
    foreach($gameSet as $currGameSet){
      
        $game = str_getcsv($currGameSet);

        // echo '<prev>';
        // var_dump($game);
        // echo '</prev>' . '<br>';

        foreach($game as $currentGame){


            if(preg_match('/\b(red)\b/i', trim($currentGame), $matches)){

                $lineRed += (int)filter_var(trim($currentGame), FILTER_SANITIZE_NUMBER_INT); 
    
            }

            if(preg_match('/\b(blue)\b/i', trim($currentGame), $matches)){

                $lineBlue += (int)filter_var(trim($currentGame), FILTER_SANITIZE_NUMBER_INT); 
    
            }

            if(preg_match('/\b(green)\b/i', trim($currentGame), $matches)){

                $lineGreen += (int)filter_var(trim($currentGame), FILTER_SANITIZE_NUMBER_INT); 
    
            }

            
        }

      
    // echo '<prev>';
    // var_dump($game);
    // echo '</prev>' . '<br>';
    //echo "For game : " . $gameId . " Red: ". $lineRed . " Blue: " . $lineBlue . " Green: " . $lineGreen .'<br>';

 
    }
     
    echo 'Game: ' . $gameId . ' geme_id_no: '. get_game_id_number($gameId) . ' Line Red: ' . $lineRed . ' Line Blue: ' . $lineBlue . ' Line Green: ' . $lineGreen . '<br>';

    if($lineRed <= red_cubes && $lineBlue <= blue_cubes && $lineGreen <= green_cubes){
        echo 'Game is possible: '. $gameId . '<br>';
        //$sumOfId += $gameId;
        $sumOfId  += get_game_id_number($gameId);
  
      }

      $lineRed = 0;
      $lineBlue = 0;
      $lineGreen = 0;
    // echo '<prev>';
    // var_dump($game);
    // echo '</prev>';


}

echo "The sum of IDs that are possible is: ". $sumOfId;