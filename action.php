<?php
function robot(){
    $choice = array("rock", "paper", "scissors");
    return  $choice[array_rand($choice)];
}

if(isset($_POST['submit'])){
    $computer = robot();
    $player = $_POST['choices'];

    if($player == $computer){
        $result = "tie <br> You both choose $computer";
    }

    else if($player === 'rock' && $computer === 'scissors'){
        $result = "You win <br> Enemy choose $computer";
    }
   
    else if($player === 'rock' && $computer === 'paper'){
        $result = "You Lose <br> Enemy choose $computer";
    }
    
    else if($player === 'paper' && $computer === 'scissors'){
        $result = "You Lose <br> Enemy choose $computer";
    }

    else if($player === 'paper' && $computer === 'rock'){
        $result = "You Win <br> Enemy choose $computer";
    }

    else if($player === 'scissors' && $computer === 'paper'){
        $result = "You Win <br> Enemy choose $computer";
    }

    else if($player === 'scissors' && $computer === 'rock'){
        $result = "You Lose <br> Enemy choose $computer";
    }

}