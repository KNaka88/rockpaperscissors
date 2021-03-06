<?php

    class RockPaperScissors
    {

        private $input1;
        private $input2;


        function __construct(){
            $this->input1 ='';
            $this->input2 ='';
        }

        function setInput1($new_input1){
            $this->input1 =$new_input1;
        }

        function getInput1(){
            return $this->input1;
        }

        function setInput2($new_input2){
            $this->input2 =$new_input2;
        }

        function getInput2(){
            return $this->input2;
        }


        function playGame($input1, $input2){
            //Rock and Scissors
            if (($input1 == "rock" && $input2 == "scissors") || ($input1 == "scissors" && $input2 == "rock")) {
                return $this->showResult($input1, "rock");
            }


            //Rock and papers
            if (($input1 == "rock" && $input2 == "papers") || ($input1 == "papers" && $input2 == "rock")) {
                return $this->showResult($input1, "papers");
            }

            //Scissors and papers
            if (($input1 == "scissors" && $input2 == "papers") || ($input1 == "papers" && $input2 == "scissors")) {
                return $this->showResult($input1, "scissors");
            }

            //Draw
            if ($input1 == $input2) {
                return "It's a Draw!";
            }
        }


        function showResult($input1, $hand){
            if ($input1 == $hand) {
                return "Player 1";
            } else {
                return "Player 2";
            }
        }
    }
