<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Game extends Component
{
    public const ROCK     = 'ROCK';
    public const PAPER    = 'PAPER';
    public const SCISSORS = 'SCISSORS';
    public const WIN      = 'WIN';
    public const LOSS     = 'LOSS';
    public const DRAW     = 'DRAW';

    public $result         = 'No games played yet!';
    public $classColor     = '';
    public $playerChoice   = 'N/A';
    public $computerChoice = 'N/A';
    public $throwcount     = 0;
    public $wincount       = 0;
    public $losscount      = 0;
    public $drawcount      = 0;

    public function choose($choice)
    {
        $this->playerChoice = $choice;

        $this->computerRandomChoice();

        $this->calculateResult();

        $this->throwcount++; 
    }

    public function computerRandomChoice()
    {
        $this->computerChoice = [
            self::ROCK, 
            self::PAPER, 
            self::SCISSORS
        ][rand(0, 2)];
    }

    public function emoji($randomEmoji){
        return $randomEmoji[
            rand(0, 2)
        ];
    }

    public function calculateResult()
    {
        switch ($this->playerChoice) {
            case self::ROCK:
                switch ($this->computerChoice) {
                    case self::SCISSORS:
                        $this->classColor = 'text-primary';
                        $this->result = self::WIN . ' ' . $this->emoji(['😁', '😅', '😎']);
                        $this->wincount++;

                        break;
                    case self::PAPER:
                        $this->classColor = 'text-success';
                        $this->result = self::LOSS . ' ' . $this->emoji(['😩', '😭', '🤨']);
                        $this->losscount++;

                        break;
                    case self::ROCK:
                        $this->classColor = 'text-danger';
                        $this->result = self::DRAW . ' ' . $this->emoji(['😱', '🧐', '🙃']);
                        $this->drawcount++;

                        break;
                }

                break;
            case self::PAPER:
                switch ($this->computerChoice) {
                    case self::ROCK:
                        $this->classColor = 'text-primary';
                        $this->result = self::WIN . ' ' . $this->emoji(['😁', '😅', '😎']);
                        $this->wincount++;

                        break;
                    case self::SCISSORS:
                        $this->classColor = 'text-success';
                        $this->result = self::LOSS . ' ' . $this->emoji(['😩', '😭', '🤨']);
                        $this->losscount++;

                        break;
                    case self::PAPER:
                        $this->classColor = 'text-danger';
                        $this->result = self::DRAW . ' ' . $this->emoji(['😱', '🧐', '🙃']);
                        $this->drawcount++;

                        break;
                }

                break;
            case self::SCISSORS:
                switch ($this->computerChoice) {
                    case self::PAPER:
                        $this->classColor = 'text-primary';
                        $this->result = self::WIN . ' ' . $this->emoji(['😁', '😅', '😎']);
                        $this->wincount++;

                        break;
                    case self::ROCK:
                        $this->classColor = 'text-success';
                        $this->result = self::LOSS . ' ' . $this->emoji(['😩', '😭', '🤨']);
                        $this->losscount++;

                        break;
                    case self::SCISSORS:
                        $this->classColor = 'text-danger';
                        $this->result = self::DRAW . ' ' . $this->emoji(['😱', '🧐', '🙃']);
                        $this->drawcount++;

                        break;
                }

                break;
        }
    }

    public function resetScore()
    {   
        $this->classColor    = '';
        $this->result         = 'No games played yet!';
        $this->playerChoice   = 'N/A';
        $this->computerChoice = 'N/A';
        $this->throwcount     = 0;
        $this->wincount       = 0;
        $this->losscount      = 0;
        $this->drawcount      = 0;
    }

    public function render()
    {
        return view('livewire.game');
    }
}
